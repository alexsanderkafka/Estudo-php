<?php

    class Contact{
        private $name;
        private $email;
        private $phone;

        function __construct($name, $email, $phone){
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getPhone(){
            return $this->phone;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }
    }

    $contato = new Contact("Alex", "batman@batman.com", "5599000030000");

    echo $contato->getName() . "<br>";
    echo $contato->getEmail() . "<br>";
    echo $contato->getPhone() . "<br>";

    $contato->setEmail("batmanmelhorquesuperman@superman.com");
    $contato->setPhone("5599009932433");

    echo $contato->getEmail() . "<br>";
    echo $contato->getPhone() . "<br>";
?>