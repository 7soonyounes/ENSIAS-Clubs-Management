<?php
require_once "view.inc.php";
class viewEdit extends view{
    public function __construct($title,$data){
        parent::__construct($title);
        $this->content.="
        <form class='form' action=../controller/controluser.inc.php?action=update&id=".$data['id']."&nom=".$data['nom']." method=post>
            <input type='text' class='name formEntry' name='clubName' value=".$data['nom']." disabled>
            <select class='salle formEntry' name='salle' id='' value=".$data['salle']." placeholder='Salle'>
            <option value='A1'>A1</option>
            <option value='A2'>A2</option>
            <option value='A3'>A3</option>
            <option value='A4'>A4</option>
            <option value='A5'>A5</option>
            <option value='A6'>A6</option>
            <option value='A7'>A7</option>
            <option value='A8'>A8</option>
        </select>
            <input class='date formEntry' type='date' name='dateBesoin' value=".$data['demandeDate']." placeholder='Date'>
           <input class='date formEntry' type='number' name='duree' value=".$data['duree']." placeholder='Duree'>
            <textarea class='demande formEntry' name='demande' rows='25' cols='50' placeholder='Demande'>".$data['demande']." </textarea>
            <button class='submit formEntry' type='submit'>Valider</button>";

    }
}

?>