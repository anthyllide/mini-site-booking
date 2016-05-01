<?php

class DatabaseConnexion {

    protected $host;
    protected $db_name;
    protected $user;
    protected $password;

    public function __construct(){

        $this->getConfig();

    }

    /**
     * permet d'insérer les paramètres de dbconfig.php dans PDO
     */
    public function getConfig(){

        $db = require(__DIR__ . '/../dbconfig.php');

        foreach ($db as $key => $value){
            
            $method = 'set'.ucfirst($key);

            if(method_exists($this,$method)){

                $this->$method($value);
            }
        }

    }

    public function connexionPDO(){

        try {

            return new \PDO('mysql:host=' . $this->getHost() . ';dbname=' . $this->getDb_name(), $this->getUser(), $this->getPassword(), array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


        } catch (PDOException $e){

            return 'Une erreur au niveau de la base de données est survenue.';

        }

    }

    //getter

    public function getHost (){

        return $this->host;

    }

    public function getDb_name (){

        return $this->db_name;

    }

    public function getUser (){

        return $this->user;

    }

    public function getPassword (){

        return $this->password;

    }

    //setter

    public function setHost($host){

    return $this->host = $host;

    }

    public function setDb_name($db_name){

        return $this->db_name = $db_name;

    }

    public function setUser($user){

        return $this->user = $user;
    }

    public function setPassword($password){

        return $this->password = $password;
    }
}