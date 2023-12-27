<?php
    require_once("models/review.php");
    require_once("models/message.php");

    require_once("dao/userDAO.php");

    class ReviewDAO implements ReviewDAOInterface{
        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url){
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }

        public function buildReview($data){
            $reviewObject = new Review();

            $reviewObject->id = $data["id"];
            $reviewObject->rating = $data["rating"];
            $reviewObject->review = $data["review"];
            $reviewObject->users_id = $data["users_id"];
            $reviewObject->movies_id = $data["movies_id"];

            return $reviewObject;
        }

        public function create(Review $review){

        }

        public function getMoviesReview($id, $review){

        }

        public function hasAlreadyReviewed($id, $userId){

        }

        public function getRatings($id){

        }

        
    }
?>