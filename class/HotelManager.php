<?php

class HotelManager{

    public function getHotel(){

        $dataConnexion = new DatabaseConnexion();

        $bdd = $dataConnexion->connexionPDO();

       /*$bdd = new PDO ('mysql:host=localhost; dbname=hotel','root','');*/

        var_dump($bdd);

        $sql = 'SELECT h.name hotel_name, c.name city
                FROM hotels h, cities c
                WHERE h.id_city = c.id_city ';

       try {

            $req = $bdd->query($sql);

        var_dump($req);

            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {

               $result [$data['hotel_name']]= $data['hotel_name'];

            }

            return ($result);

       } catch (PDOException $e){

            return 'la requête a plantée.';

        }
    }
}


