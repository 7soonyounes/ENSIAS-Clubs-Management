<?php
    include_once "../model/model.inc.php";
    include_once "../view/viewalluser.inc.php";
    include_once "../view/viewedit.inc.php";
    include_once "../view/demandesform.php";

    class ControlUser extends Model{
        private $action;
        private $model;
        private $view;
        public function __construct(){
            $this->model= new Model();
            $this->action="all";
        }


        public function AllUserRequestsAction(){
            $name=$_GET["nom"];
            $requests=$this->model->oneClubRequestsName($name);
            $this->view=new ViewAllUser("Tous les demandes: $name",$name);
            $this->view->all($requests);
            $this->view->display();
        }

        public function addNewRequestAction(){
            $nom=$_POST["clubName"];
            $salle=$_POST["salle"];
            $date=$_POST["dateBesoin"];
            $duree=$_POST["duree"];
            $demande=$_POST["demande"];
            $this->model->addNewRequest($nom, $salle, $date, $duree, $demande);
            header('location:controluser.inc.php?nom='.$nom.'');
        }

        public function deleteRequestIDAction(){
            $name=$_GET["nom"]; 
            $id=$_GET["id"];
            $this->model->deleteDemandeID($id);
            header('location:controluser.inc.php?nom='.$name.'');
        }
        
        public function oneClubRequestsAction(){
            $id=$_GET["id"];
            $requests=$this->model->oneClubRequests($id);
            $this->view=new ViewAllUser("Demande:$id",'');
            $this->view->one($requests);
            $this->view->display();
        }
        
        public function editRequest(){
            $id=$_GET["id"];
            $demande=$this->model->oneClubRequests($id);

            foreach($demande as $dm){
                $this->view=new viewEdit('Modification',$dm);
                $this->view->display();
            }

        }
        public function updateRequestAction(){
            $name=$_GET["nom"]; 
            $id=$_GET["id"];
            $salle=$_POST["salle"];
            $date=$_POST["dateBesoin"];
            $duree=$_POST["duree"];
            $demande=$_POST["demande"];
            $this->model->updateDemande($id, $salle, $date, $duree, $demande);
            header('location:controluser.inc.php?nom='.$name.'');
        }
        
        public function userForm(){
            $name=$_GET['nom'];
            $results=$this->model->dateSalle();
            $this->view=new ViewForm("Nouvelle Demande","$name",$results);
            $this->view->display();
        }

        public function actionUser(){
            $action='all';

            if(isset($_GET['action']))
            $action=$_GET['action'];

            if(isset($_POST['action']))
            $action=$_POST['action'];

            switch($action){

                case 'all':
                    $this->AllUserRequestsAction();
                    break;
                case 'add':
                    $this->addNewRequestAction();
                    break;
                case 'del':
                    $this->deleteRequestIDAction();
                    break;
                case 'one':
                    $this->oneClubRequestsAction();
                    break;
                case 'edit':
                    $this->editRequest();
                    break;
                case 'update':
                    $this->updateRequestAction();
                    break;
                case 'new':
                    $this->userForm();
                    break;    
            }
        }
    }
$control= new ControlUser();
$control->actionUser();