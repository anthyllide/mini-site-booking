<?php
class CustomerManager {


    public function addCustomer(Customer $customer){

        $dataConnexion = new DatabaseConnexion();

        $bdd = $dataConnexion->connexionPDO();

        $sql = 'INSERT INTO customers (name, email) VALUES (:name, :email)';

        $req = $bdd->prepare($sql);

        $req ->bindParam(':name', $customer->getName());
        $req ->bindParam(':email', $customer->getEmail());

        $req->execute();

    }


}