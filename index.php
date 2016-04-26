<?php
require ('class/DatabaseConnexion.php');
require ('class/HotelManager.php');

$datahotel = new HotelManager();
$connexion= new DatabaseConnexion();



var_dump ($datahotel->getHotel());


?>