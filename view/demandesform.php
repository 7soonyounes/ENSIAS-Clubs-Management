<?php
include_once 'view.inc.php';
class ViewForm extends view{
    public function __construct($title,$data,$results){
        parent::__construct($title);

        $this->content.=' <table class="form" style="color:black"><thead><tr><th>Salle demandée</th><th>Date</th><th>Durée</th></tr></thead>';
        foreach ($results as $result){
         $this->content.='<tr><td>'.$result[0].'</td><td>'.$result[1].'</td><td>'.$result[2].'  Jours</td></tr>';
        }
         $this->content.='</table>';
         $this->content.='<form class="form" action="../controller/controluser.inc.php?action=add" method="post">
         <input type="text" name="clubName" class="name formEntry"  value='.$data.' placeholder="Nom du club" />
          <select name="salle" id="" class="salle formEntry" placeholder="Salle"> 
          <option value="" disabled selected hidden>Salle</option>
          <option value="A1">A1</option>
          <option value="A2">A2</option>
          <option value="A3">A3</option>
          <option value="A4">A4</option>
          <option value="A5">A5</option>
          <option value="A6">A6</option>
          <option value="A7">A7</option>
          <option value="A8">A8</option>
          </select>
          <input type="date" name="dateBesoin" class="date formEntry">
          <input type="number" name="duree" class="date formEntry" placeholder="Duree">
          <textarea class="demande formEntry" name="demande" placeholder="demande"></textarea>
          <button class="submit formEntry" type="submit" onclick="thanks()">Valider</button>
        </form>
      </div>';
}
}
?>

