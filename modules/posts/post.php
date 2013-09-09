<?php 
	/**
	* A post for newsfeeds
	*/
	class Post{

		public  $id = "";
		public  $title = "";
		public  $text = "";
		public  $created = "";
		public  $author = "";

		public function __construct($id, $title, $text, $created, $author){
			$this->id = $id;
			$this->title = $title;
			$this->text = $text;
			$this->created = $created;
			$this->author = $author;
		}
		
		/**
		 * Getter for title
		 *
		 * @return mixed
		 */
		public function getTitle()
		{
		    return $this->title;
		}
		
		/**
		 * Setter for title
		 *
		 * @param mixed $title Value to set
		 * @return self
		 */
		public function setTitle($title)
		{
		    $this->title = $title;
		    return $this;
		}
		
		/**
		 * Getter for text
		 *
		 * @return mixed
		 */
		public function getText()
		{
		    return $this->text;
		}
		
		/**
		 * Setter for text
		 *
		 * @param mixed $text Value to set
		 * @return self
		 */
		public function setText($text)
		{
		    $this->text = $text;
		    return $this;
		}

		/**
		 * Getter for created
		 *
		 * @return mixed
		 */
		public function getCreated()
		{
		    return $this->created;
		}
		
		/**
		 * Setter for created
		 *
		 * @param mixed $created Value to set
		 * @return self
		 */
		public function setCreated($created)
		{
		    $this->created = $created;
		    return $this;
		}
		
		/**
		 * Getter for author
		 *
		 * @return mixed
		 */
		public function getAuthor()
		{
		    return $this->author;
		}
		
		/**
		 * Setter for author
		 *
		 * @param mixed $author Value to set
		 * @return self
		 */
		public function setAuthor($author)
		{
		    $this->author = $author;
		    return $this;
		}	
	}
?>