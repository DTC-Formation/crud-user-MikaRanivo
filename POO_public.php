<?php

class Utilisateur{
    public $name="mika";
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($newName)
    {
        $this->name = $newName;

        return $this;
    }

    public function setAge($newAge)
    {
        $this->age = $newAge;

        return $this;
    }
}

class Client extends Utilisateur{

     public function getNameUtilsateur()
     {
         return $this->name;
     }
}




$client1 = new Client();
echo $client1->getNameUtilsateur();
