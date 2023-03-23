<?php
    require_once "view.inc.php";

    class ViewAll extends View{

        public function __construct($title){
            parent::__construct($title);
            
        }

        public function all($requests){
            $this->content.="<table border=1 align=center><tr><th>ID</th><th>Club</th><th>Salle<th>Statut</th><th>Suppression</th><th>Affichage</th><th>Accepter</th><th>Refuser</th></tr>";
            foreach ($requests as $request){
                $this->content.="<tr><td>$request[0]</td><td>$request[1]</td><td>$request[2]</td><td>$request[6]</td>";
                $this->content.="<td align=center><a href=control.inc.php?action=del&id=".$request[0]."><img src='../controller/images/delete.png'></a></td>";
                $this->content.="<td align=center><a href=control.inc.php?action=one&id=".$request[0]."><img src='../controller/images/view.png' alt='Afficher'></a></td>";
                $this->content.="<td align=center><a href=control.inc.php?action=check&id=".$request[0]."&statut=1><img src='../controller/images/accepter.png'></a></td>";
                $this->content.="<td align=center><a href=control.inc.php?action=check&id=".$request[0]."&statut=0><img src='../controller/images/refuser.png'></a></td>";
            }
            $this->content.="<tr><th colspan='10'>Nombre de demandes : ".count($requests)."</tr></table>";
        }
        
        public function one($requests){
            $this->content.="<table border=1 align=center><tr><th>ID</th><th>Club</th><th>Salle</th><th>Date</th><th>Durée</th><th>Demande</th><th>Statut</th><th>Suppression</th><th>Accepter</th><th>Refuser</th></tr>";
            foreach ($requests as $request){
                $this->content.="<tr><td>$request[0]</td><td>$request[1]</td><td>$request[2]</td><td>$request[3]</td><td>$request[4]</td><td>$request[5]</td><td>$request[6]</td>";
                $this->content.="<td align=center><a href=control.inc.php?action=del&id=".$request[0]."><img src='images/delete.png'></a></td>";
                $this->content.="<td align=center><a href=control.inc.php?action=check&id=".$request[0]."&statut=1><img src='../controller/images/accepter.png'></a></td>";
                $this->content.="<td align=center><a href=control.inc.php?action=check&id=".$request[0]."&statut=0><img src='../controller/images/refuser.png'></a></td>";
                $this->content.="</tr></table>";
            }
        }
    }
?>