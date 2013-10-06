<?php 
	/**
	* An Issue for Issues
	*/
	class Issue{

		public $id = "";
		public $title = "";
		public $desc = "";
		public $type = "";
		public $date = "";
		public $resolved = "";
		public $submitContact = "";

		public function __construct($id, $title, $desc, $type, $date, $resolved, $submitContact){
			$this->id = $id;
			$this->title = $title;
			$this->desc = $desc;
			$this->type = $type;
			$this->date = $date;
			$this->resolved = $resolved;
			$this->submitContact = $submitContact;
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
		 * Getter for type
		 *
		 * @return mixed
		 */
		public function getType()
		{
		    return $this->type;
		}
		
		/**
		 * Setter for type
		 *
		 * @param mixed $type Value to set
		 * @return self
		 */
		public function setType($type)
		{
		    $this->type = $type;
		    return $this;
		}

		/**
		 * Getter for date
		 *
		 * @return mixed
		 */
		public function getDate()
		{
		    return $this->date;
		}
		
		/**
		 * Setter for date
		 *
		 * @param mixed $date Value to set
		 * @return self
		 */
		public function setDate($date)
		{
		    $this->date = $date;
		    return $this;
		}

		/**
		 * Getter for resolved
		 *
		 * @return mixed
		 */
		public function getResolved()
		{
		    return $this->resolved;
		}
		
		/**
		 * Setter for resolved
		 *
		 * @param mixed $resolved Value to set
		 * @return self
		 */
		public function setResolved($resolved)
		{
		    $this->resolved = $resolved;
		    return $this;
		}

		/**
		 * Getter for submitContact
		 *
		 * @return mixed
		 */
		public function getSubmitContact()
		{
		    return $this->submitContact;
		}
		
		/**
		 * Setter for submitContact
		 *
		 * @param mixed $submitContact Value to set
		 * @return self
		 */
		public function setSubmitContact($submitContact)
		{
		    $this->submitContact = $submitContact;
		    return $this;
		}	
	}
?>