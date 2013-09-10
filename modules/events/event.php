<?php
	/**
	* Class for Events
	*/
	class Event{
		
		public $id = "";
		public $title = "";
		public $desc = "";
		public $timedate = "";

		function __construct($id, $title, $desc, $timedate){
			$this->id = $id;
			$this->title = $title;
			$this->desc = $desc;
			$this->timedate = $timedate;
		}

		/**
		 * Getter for id
		 *
		 * @return mixed
		 */
		public function getId()
		{
		    return $this->id;
		}
		
		/**
		 * Setter for id
		 *
		 * @param mixed $id Value to set
		 * @return self
		 */
		public function setId($id)
		{
		    $this->id = $id;
		    return $this;
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
		 * Getter for timedate
		 *
		 * @return mixed
		 */
		public function getTimedate()
		{
		    return $this->timedate;
		}
		
		/**
		 * Setter for timedate
		 *
		 * @param mixed $timedate Value to set
		 * @return self
		 */
		public function setTimedate($timedate)
		{
		    $this->timedate = $timedate;
		    return $this;
		}
	}
?>