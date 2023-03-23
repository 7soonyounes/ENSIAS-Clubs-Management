<?php
    require_once "view.inc.php";

    class ViewAllUser extends View{
        public $name;

        public function __construct($title,$name){
            parent::__construct($title);
            $this->name=$name;
        }

        public function all($requests){
            $this->content.="<table border=1 align=center><tr><th>ID</th><th>Club</th><th>Salle<th>Statut</th><th>Suppression</th><th>Modifier</th><th>Affichage</th></tr>";
            foreach ($requests as $request){
                $this->content.="<tr><td>$request[0]</td><td>$request[1]</td><td>$request[2]</td><td>$request[6]</td>";
                $this->content.="<td align=center><a href=controluser.inc.php?action=del&id=".$request[0]."&nom=".$request[1]."><img src='../controller/images/delete.png'></a></td>";
                $this->content.="<td align=center><a href=controluser.inc.php?action=edit&id=".$request[0]."&nom=".$request[1]."><img src='../controller/images/edit.png'></a></td>";
                $this->content.="<td align=center><a href=controluser.inc.php?action=one&id=".$request[0]."&nom=".$request[1]."><img src='../controller/images/view.png' alt='Afficher'></a></td>";
                
            }
            $this->content.="<tr><th colspan='10'>Nombre de demandes : ".count($requests)."</tr></table>";
            $this->content.='<br><a href=controluser.inc.php?action=new&nom='.$this->name.' id="add">Ajouter une nouvelle demande</a>';
        }
        
        public function one($requests){
            $this->content.="<table border=1 align=center><tr><th>ID</th><th>Club</th><th>Salle</th><th>Date</th><th>Durée</th><th>Demande</th><th>Statut</th><th>Suppression</th><th>Modifier</th><th>Raison en cas de refus</th></tr>";
            foreach ($requests as $request){
                $this->content.="<tr><td>$request[0]</td><td>$request[1]</td><td>$request[2]</td><td>$request[3]</td><td>$request[4]</td><td>$request[5]</td><td>$request[6]</td>";
                $this->content.="<td align=center><a href=controluser.inc.php?action=del&id=".$request[0]."&nom=".$request[1]."><img src='images/delete.png'></a></td>";
                $this->content.="<td align=center><a href=controluser.inc.php?action=edit&id=".$request[0]."&nom=".$request[1]."><img src='images/edit.png'></a></td>";
                $this->content.="<td>$request[7]</td>";
                $this->content.="</tr></table>";
            }
        }
    }
?>