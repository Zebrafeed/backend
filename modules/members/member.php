<?php
	class Member{
		$id = "";
		$username = "";
		$password = "";
		$email = "";
		$fullname = "";
		$adress = "";
		// $ort = "";
		$idnr = "";
		$telnr = "";

		public __construct(){

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
		 * Getter for username
		 *
		 * @return mixed
		 */
		public function getUsername()
		{
		    return $this->username;
		}
		
		/**
		 * Setter for username
		 *
		 * @param mixed $username Value to set
		 * @return self
		 */
		public function setUsername($username)
		{
		    $this->username = $username;
		    return $this;
		}

		/**
		 * Getter for password
		 *
		 * @return mixed
		 */
		public function getPassword()
		{
		    return $this->password;
		}
		
		/**
		 * Setter for password
		 *
		 * @param mixed $password Value to set
		 * @return self
		 */
		public function setPassword($password)
		{
		    $this->password = $password;
		    return $this;
		}
		

		/**
		 * Getter for email
		 *
		 * @return mixed
		 */
		public function getEmail()
		{
		    return $this->email;
		}
		
		/**
		 * Setter for email
		 *
		 * @param mixed $email Value to set
		 * @return self
		 */
		public function setEmail($email)
		{
		    $this->email = $email;
		    return $this;
		}

		/**
		 * Getter for fullname
		 *
		 * @return mixed
		 */
		public function getFullname()
		{
		    return $this->fullname;
		}
		
		/**
		 * Setter for fullname
		 *
		 * @param mixed $fullname Value to set
		 * @return self
		 */
		public function setFullname($fullname)
		{
		    $this->fullname = $fullname;
		    return $this;
		}

		/**
		 * Getter for adress
		 *
		 * @return mixed
		 */
		public function getAdress()
		{
		    return $this->adress;
		}
		
		/**
		 * Setter for adress
		 *
		 * @param mixed $adress Value to set
		 * @return self
		 */
		public function setAdress($adress)
		{
		    $this->adress = $adress;
		    return $this;
		}

		// /**
		//  * Getter for ort
		//  *
		//  * @return mixed
		//  */
		// public function getOrt()
		// {
		//     return $this->ort;
		// }
		
		// /**
		//  * Setter for ort
		//  *
		//  * @param mixed $ort Value to set
		//  * @return self
		// 	*/

		// public function setOrt($ort)
		// {
		//     $this->ort = $ort;
		//     return $this;
		// }

		/**
		 * Getter for idnr
		 *
		 * @return mixed
		 */
		public function getIdnr()
		{
		    return $this->idnr;
		}
		
		/**
		 * Setter for idnr
		 *
		 * @param mixed $idnr Value to set
		 * @return self
		 */
		public function setIdnr($idnr)
		{
		    $this->idnr = $idnr;
		    return $this;
		}
		
		/**
		 * Getter for telnr
		 *
		 * @return mixed
		 */
		public function getTelnr()
		{
		    return $this->telnr;
		}
		
		/**
		 * Setter for telnr
		 *
		 * @param mixed $telnr Value to set
		 * @return self
		 */
		public function setTelnr($telnr)
		{
		    $this->telnr = $telnr;
		    return $this;
		}
		
		
		
		
		
		
		

	}
?>