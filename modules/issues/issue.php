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

		
	}
?>