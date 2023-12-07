<?php

    Class User {
        public $id;
        public $name;
        public $lasname;
        public $password;
        public $image;
        public $bio;
        public $token;


    }

    interface UserDAOInterface{
        public function builUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function changePassword(User $user);
    }
?>