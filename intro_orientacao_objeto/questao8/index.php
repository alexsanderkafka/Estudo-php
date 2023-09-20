<?php
    class Task{
        public $title;
        public $description;
        public $completed;

        public function markAsCompleted(){
            $this->completed = "Concluída";
        }

        public function markAsIncomplete(){
            $this->completed = "Nao concluida";
        }

        public function getTitle(){
            return $this->title;
        }

        public function getDescription(){
            return $this->description;
        }

        public function isCompleted(){
            if($completed === "Concluida"){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>