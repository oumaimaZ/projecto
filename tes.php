<?php 
            $bd=new PDO('mysql:local=localhost;dbname=domotique_data;char set=utf8','root','');
            $sql='update equipement  set connect=? where id_equipement=?';
                $req=$bd->prepare(array(/* la varriable */));
            

?>