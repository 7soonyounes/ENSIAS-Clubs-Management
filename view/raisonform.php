<?php
    include_once 'view.inc.php';
    class RaisonForm extends View{
        public function __construct($title,$data){
            parent::__construct($title);
            $this->content.='<div class="wrapper">
            <form class="form" action="../controller/control.inc.php?action=refus&id='.$data.'" method="post">
              <textarea class="demande formEntry" name="raison" placeholder="Raison de refus"></textarea>
              <button class="submit formEntry" type="submit" onclick="thanks()">Valider</button>
            </form>
          </div>';
    }
}
?>