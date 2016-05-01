<?php

class HotelManager{

    //Affichage de la liste d'hôtels
    public function getHotel(){

       $dataConnexion = new DatabaseConnexion();

        $bdd = $dataConnexion->connexionPDO();

        $sql = 'SELECT h.name hotel_name, c.name city
                FROM hotels h, cities c
                WHERE h.id_city = c.id_city ';
    try {
       $req = $bdd->query($sql);

            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {

               $result [$data['hotel_name']]= $data['city'];

            }

            return ($result);

       } catch (PDOException $e){

            return false;

        }
    }

}


