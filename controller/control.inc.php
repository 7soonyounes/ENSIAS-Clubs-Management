<?php
    include_once "../model/model.inc.php";
    include_once "../view/viewall.inc.php";
    include_once "../view/viewedit.inc.php";
    include_once "../view/raisonform.php";
    include_once "../view/contactform.php";

    class ControlAdmin extends Model{
        private $action;
        private $model;
        private $view;

        public function __construct(){
            $this->model= new Model();
            $this->action="all";
        }
        
        public function allRequestsAction(){
            $requests=$this->model->viewAllRequests();
            $this->view=new ViewAll("Tous les demandes");
            $this->view->all($requests);
            $this->view->display();
        }

        public function oneClubRequestsAction(){
            $id=$_GET["id"];
            $requests=$this->model->oneClubRequests($id);
            $this->view=new ViewAll("Search: $id");
            $this->view->one($requests);
            $this->view->display();
        }

        public function deleteRequestIDAction(){ 
            $id=$_GET["id"];
            $this->model->deleteDemandeID($id);
            header('location:control.inc.php');
        }

        public function deleteRequestNameAction(){
            $nom=$_GET["nom"];
            $this->model->deleteDemandeName($nom);
            header('location:control.inc.php');
        }

        public function statutDemandeAction(){
            $statut=$_GET["statut"];
            if ($statut=='1'){$statut='Acceptée';}
            else{$statut='Refusée';}
            $id=$_GET["id"];
            $this->model->statutDemande($id,$statut);
            if ($statut=='Refusée'){
                $this->view=new RaisonForm("Ecrire la raison du refus",$id);
                $this->view->display();
            }
            else{header('location:control.inc.php');}
        }

        public function refusRaisonAction(){
            $id=$_GET['id'];
            $raison=$_POST['raison'];
            $this->model->refuseRaison($id,$raison);
            header('location:control.inc.php');
        }
        

        public function contactAction(){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];
            $this->model->sendMessage($name,$email,$message);
            header("location:../view/remerciment.php?name=$name");
        }

        public function contactForm(){
            $view=new ViewContact("Contactez-nous");
            $view->display();
        }

        public function action(){
            $action='all';

            if(isset($_GET['action']))
            $action=$_GET['action'];

            if(isset($_POST['action']))
            $action=$_POST['action'];

            switch($action){

                case 'all':
                    $this->allRequestsAction();
                    break;
                case 'del':
                    $this->deleteRequestIDAction();
                    break;
                case 'one':
                    $this->oneClubRequestsAction();
                    break;
                case 'check':
                    $this->statutDemandeAction();
                    break;
                case 'refus':
                    $this->refusRaisonAction();
                    break;
                case 'contact':
                    $this->contactAction();
                    break;
                case 'contactform':
                    $this->contactForm();
                    break;
            }
        }
    }
    $control=new ControlAdmin();
    $control->action();
    