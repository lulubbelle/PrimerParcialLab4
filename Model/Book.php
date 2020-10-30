<?php
    namespace Model;

    class Book
    {
        private $id;
        private $title;
        private $author;
        private $genre;
        private $format;
    
        public function getId(){
            return $this->id;
        }
    
        public function getTitle(){
            return $this->title;
        }
    
        public function getAuthor(){
            return $this->author;
        }
    
        public function getGenre(){
            return $this->genre;
        }
    
        public function getFormat(){
            return $this->format;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function setTitle($title){
            $this->title = $title;
        }
    
        public function setAuthor($author){
            $this->author = $author;
        }
    
        public function setGenre($genre){
            $this->genre = $genre;
        }
    
        public function setFormat($format){
            $this->format = $format;
        }
    
    }

?>