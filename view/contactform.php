<?php
    include_once 'view.inc.php';
     
    class ViewContact extends View{
        public function __construct($title){
            parent::__construct($title);
            $this->content.='<div class="wrapper">
            <form class="form" action="../controller/control.inc.php?action=contact" method="post">
             <input type="text" class="name formEntry" name="name" placeholder="nom" />
             <input type="email" class="name formEntry" name="email" placeholder="email" />
              <textarea class="demande formEntry" name="message" placeholder="message"></textarea>
              <button class="submit formEntry" type="submit" onclick="thanks()">Envoyer</button>
            </form>
          </div>';
    
        }
    }
?>