<?php 
	/**
	* A post for newsfeeds
	*/
	class Post{

		public $title = "";
		public $text = "";
		public $meta = "";
		public $author = "";

		function __construct($title, $text, $meta, $author){
			$this->$title = $title;
			$this->$text = $text;
			$this->$meta = $meta;
			$this->$author = $author;
		}

		/*
			Getters and Setters
		*/

		//Title
		public function getTitle(){
			return $this->$title;
		}
		public function setTitle($title){
			$this->$title = $title;
		}

		//Text
		public function getText(){
			return $this->$text;
		}
		public function setText($text){
			$this->$text = $text;
		}

		//Meta
		public function getMeta(){
			return $this->$meta;
		}
		public function setMeta($meta){
			$this->$meta = $meta;
		}

		//Author
		public function getAuthor(){
			return $this->$author;
		}
		public function setAuthor($author){
			$this->$author = $author;
		}

	}
?>