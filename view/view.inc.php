<?php
    include_once "../model/model.inc.php";
    class View extends Model{
        protected $content;
        protected $title;

        public function __construct($title){
            $this->title=$title;
            $this->content='<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="../view/formstyle.css">
                <link rel="stylesheet" href="../view/style4.css">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            </head>
            <body>
                <header class="main-head">
                    <nav>
                        <h1>'.$title.'</h1>
                        <ul>
                            <li></li>
                            <li></li>
                            <li><a href="../view/index.html" id="return">Retour</a></li>
                        </ul>
                    </nav>
                </header>
                
            <section class="hero">';
        }

        public function getContent(){
            return $this->content;
        }

        public function endContent(){
            $this->content.='</section>
            <footer class="footer">
                <div class="contrainer">
                    <div class="row">
                        <div class="footer-col">
                            <h4>LIENS UTILES</h4>
                            <ul>
                                <li><a href="http://ensias.um5.ac.ma/">ENSIAS</a></li>
                                <li><a href="http://www.um5.ac.ma/um5/">UM5</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>CONTACTEZ-NOUS</h4>
                            <ul><li><a href="../controller/control.inc.php?action=contactform">Laissez nous vos remarques</a></li></ul>
                        </div>
                        <div class="footer-col">
                            <h4>LOCALISATION</h4>
                            <ul>
                                <li><a href="https://goo.gl/maps/RiRmaHsEMcCmw6a69">Avenue Mohammed Ben Abdallah Regragui, Madinat Al Irfane, BP 713, Agdal Rabat, Maroc</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <script src="../view/main.js"></script>
            </body>
            </html>';
        }

        public function display(){
            $this->endContent();
            echo $this->getContent();
        }
    }


?>