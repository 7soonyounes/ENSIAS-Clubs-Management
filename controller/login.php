<?php
    include_once "../model/model.inc.php";
    include_once "../view/demandesform.php";
    include_once "../controller/controluser.inc.php";
    class Login extends ViewForm{
        private $login;
        private $pwd;
        private $model;
        private $view;
        private $control;

        public function __construct(){
            $this->model= new Model();
        }

        public function loginCheck(){
            $this->login=$_POST['login'];
            $this->pwd=$_POST['pass'];
            $sql="SELECT * FROM USER WHERE login = ?";
            $query=$this->model->db->prepare($sql);
            $query->execute([$this->login]);
            $results=$query->fetchAll();
            foreach ($results as $result){
            if (empty($result)){
                header('location:../view/login2.html');
                exit();
            }
            return $result;
            }
        }

        public function passCheck(){
            $result=$this->logincheck();
            if ($result['2'] != $this->pwd){
                header('location:../view/login2.html');
                exit();
            }
            switch($this->login){
                case 'admin':
                    header('location:../controller/control.inc.php');
                    break;
                case 'urh':
                    header('location:../controller/controluser.inc.php?nom=URH');
                    break;
                case 'ai':
                    header('location:../controller/controluser.inc.php?nom=AI');
                    break;
                case 'bridge':
                    header('location:../controller/controluser.inc.php?nom=BRIDGE');
                    break;
                case 'cindh':
                    header('location:../controller/controluser.inc.php?nom=CINDH');
                    break;
                case 'cje':
                    header('location:../controller/controluser.inc.php?nom=CJE');
                    break;
                case 'insec':
                    header('location:../controller/controluser.inc.php?nom=INSEC');
                    break;
                case 'it':
                    header('location:../controller/controluser.inc.php?nom=IT');
                    break;
                case 'olympiades':
                    header('location:../controller/controluser.inc.php?nom=Olympiades');
                    break;
                case 'quran':
                    header('location:../controller/controluser.inc.php?nom=ClubQuran');
                    break;
                case 'robotics':
                    header('location:../controller/controluser.inc.php?nom=ROBOTICS');
                    break;
                case 'fintech':
                    header('location:../controller/controluser.inc.php?nom=FINTECH');
                    break;
                case 'hoa':
                    header('location:../controller/controluser.inc.php?nom=HOA');
                    break;
                case 'enactus':
                    header('location:../controller/controluser.inc.php?nom=ENACTUS');
                    break;
                case 'sport':
                    header('location:../controller/controluser.inc.php?nom=ClubSportif');
                    break;
                case 'ieee':
                    header('location:../controller/controluser.inc.php?nom=IEEE');
                    break;
                case 'forum':
                    header('location:../controller/controluser.inc.php?nom=FORUM');
                    break;
                case 'respo':
                    header('location:../controller/controluser.inc.php?nom=Responsable');
                    break;
                default:
                    header('location:../view/login2.html');
                    break;
        }
        
    }
}
    $login=new Login();
    $login->passCheck();

?>