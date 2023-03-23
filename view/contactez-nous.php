<?php
    include_once "../model/model.inc.php";
    include_once "../view/contactez-nous.php";

    class Contact extends Model{
        private $model;
        private $view;
        public function __construct(){
            $this->model= new Model();
        }


    }
?>