<?php
	/**
	* Image class
	*/
	class Image{

		public $id = "";
		public $name = "";
		public $desc = "";
		public $uri = "";
		
		function __construct($name, $desc, $uri, $id){
			$this->name = $name;
			$this->desc = $desc;
			$this->uri = $uri;
			$this->id = $id;
		}

		/**
		 * Getter for name
		 *
		 * @return mixed
		 */
		public function getName()
		{
		    return $this->name;
		}
		
		/**
		 * Setter for name
		 *
		 * @param mixed $name Value to set
		 * @return self
		 */
		public function setName($name)
		{
		    $this->name = $name;
		    return $this;
		}

		/**
		 * Getter for desc
		 *
		 * @return mixed
		 */
		public function getDesc()
		{
		    return $this->desc;
		}
		
		/**
		 * Setter for desc
		 *
		 * @param mixed $desc Value to set
		 * @return self
		 */
		public function setDesc($desc)
		{
		    $this->desc = $desc;
		    return $this;
		}

		/**
		 * Getter for uri
		 *
		 * @return mixed
		 */
		public function getUri()
		{
		    return $this->uri;
		}
		
		/**
		 * Setter for uri
		 *
		 * @param mixed $uri Value to set
		 * @return self
		 */
		public function setUri($uri)
		{
		    $this->uri = $uri;
		    return $this;
		}
		
		
		
	}
?>