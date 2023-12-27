<?php
   require_once("globals.php");
   require_once("db.php");
   require_once("models/movie.php");
   require_once("models/message.php");
   require_once("dao/userDAO.php");
   require_once("dao/movieDAO.php");

   $message = new Message($BASE_URL);
   $userDao = new UserDAO($conn, $BASE_URL);
   $movieDao = new MovieDAO($conn, $BASE_URL);

   //Resgata dados do usuário  
   $userData = $userDao->verifyToken();

   //Recebendo o tipo do formulário
   $type = filter_input(INPUT_POST, "type");

   if($type){
        
   }
?>