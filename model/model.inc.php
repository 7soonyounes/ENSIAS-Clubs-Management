<?php
    class Model{
        protected $db;
        private static $instance;
    
        function __construct(){   //connection a la base de donnee
            $this->db=new PDO(
                'mysql:host=localhost;dbname=clubs_db',
                'root',
                ''
            );
        }
        public static function getInstance(){
            if (empty(self::$instance)){
                self::$instance=new Model();
            }
            return self::$instance;
        }
        public function viewAllRequests(){  //Voir tous les demandes
            $sql="SELECT * FROM Demandes";
            $query=$this->db->prepare($sql);
            $query->execute();
            return $query->fetchALL();
        }

        public function oneClubRequests($id){  //Voir seulement les demandes d'un club
            $sql="SELECT * FROM Demandes WHERE id = ?";
            $query=$this->db->prepare($sql);
            $query->execute(array($id));
            return $query->fetchALL();
        }
        public function oneClubRequestsName($name){  //Voir seulement les demandes d'un club
            $sql="SELECT * FROM Demandes WHERE nom = ?";
            $query=$this->db->prepare($sql);
            $query->execute([$name]);
            return $query->fetchALL();
        }

        public function oneSalleRequests($salle){  //Voir seulement les demandes qui veulent une salle particuliere
            $sql="SELECT * FROM Demandes WHERE salle = ?";
            $query=$this->db->prepare($sql);
            $query->execute([$salle]);
            return $query->fetchALL();
        }

        public function addNewRequest($nom, $salle, $date, $duree, $demande){  //Ajouter une demande a la base de donnee
            $sql = "INSERT INTO Demandes VALUES (?,?,?,?,?,?,?,?)";
            $query = $this->db->prepare($sql);
            $query->execute([NULL, $nom, $salle, $date, $duree, $demande,'En cours','Pas encore de réponse']);
        }

        public function deleteDemandeID($id){  //Supprimer une demande de la base de donnee selon ID
            $query = $this->db->prepare("DELETE FROM Demandes WHERE id = ?");
            $query->execute(array($id));
        }

        public function deleteDemandeName($nom){  //Supprimer tous les demandes d,un club de la base de donnee
            $query = $this->db->prepare("DELETE FROM Demandes WHERE nom = ?");
            $query->execute([$nom]);
        }

        public function updateDemande($id, $salle, $date, $duree, $demande){   //Modifer la demande selon ID
            $sql = "UPDATE Demandes SET salle = ?, demandeDate = ?, duree = ?, demande = ? WHERE id = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$salle,$date,$duree,$demande,$id]);
        }

        public function statutDemande($id,$statut){
            $sql="UPDATE Demandes SET statut = ? WHERE id=?";
            $query = $this->db->prepare($sql);
            $query->execute([$statut,$id]);
        }

        public function refuseRaison($id,$raison){
            $sql="UPDATE Demandes SET raison = ? WHERE id=?";
            $query = $this->db->prepare($sql);
            $query->execute([$raison,$id]);
        }

        public function sendMessage($name,$email,$message){
            $query=$this->db->prepare('INSERT INTO Contact VALUES(?,?,?,?)');
            $query->execute([NULL,$name,$email,$message]);
        }

        public function dateSalle(){
            $query=$this->db->prepare('SELECT salle,demandeDate,duree FROM Demandes');
            $query->execute();
            return $query->fetchALL();
        }
    }