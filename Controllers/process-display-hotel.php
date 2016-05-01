<?php
$hotels = new HotelManager();

$listHotel = $hotels->getHotel();

    if($listHotel === false){

    $msg_error = 'Le serveur a planté.';

    } else {

        $listResult = $listHotel;

    }
