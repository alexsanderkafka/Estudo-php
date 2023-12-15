<?php

    require_once("models/movie.php");
    require_once("models/message.php");

    Class MovieDAO implements MovieDAOInterface{

        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url){
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }

        public function buildMovie($data){
            $movie = new Movie();

            $movie->id = $data["id"];
            $movie->title = $data["title"];
            $movie->description = $data["description"];
            $movie->image = $data["image"];
            $movie->trailer = $data["trailer"];
            $movie->category= $data["category"];
            $movie->length = $data["length"];
            $movie->usersId = $data["usersId"];

            return $movie;
        }

        public function findAll(){

        }

        public function getLatesMovies(){

        }

        public function getMoviesByCategory($category){

        }

        public function getMoviesByUserId($id){

        }

        public function findById($id){

        }

        public function findByTitle($title){

        }
        
        public function create(Movie $movie){

        }

        public function uptade(Movie $movie){

        }

        public function destroy($id){

        }
    }
?>