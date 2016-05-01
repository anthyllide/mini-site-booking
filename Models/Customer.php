<?php
class Customer{

    protected $id_customer;
    protected $name;
    protected $email;

    public function __construct(array $data)
    {

        $this->setId_customer($data[$id_customer]);
        $this->setName($data[$name]);
        $this->setEmail($data[$email]);

    }

    //getter

    public function getId_customer()
    {

        return $this->id_customer;

    }

    public function getName()
    {

        return $this->name;
    }

    public function getEmail()
    {

        return $this->email;
    }

    //setter

    public function setId_customer($id_customer){
        if((is_int($id_customer)) AND ($id_customer > 0)) {

            $this->id_customer = $id_customer;
        }

    }

    public function setName($name){

        if(is_string($name)){

            $this->name = $name;

        }
    }

    public function setEmail($email){

        if(is_string($email)) {

            $this->email = $email;
        }
    }

}
