<?php 
namespace Bookstore\Domain;
use Bookstore\Utils\Unique;
class Person{
	use Unique;
	private $email;
	protected $firstname;
	protected $username;

	public function __construct($id,$firstname,$username,$email){
	//	parent::__construct($firstname,$username);

			$this->setId($id);

		//	$this->id = $id;
			$this->firstname = $firstname;
			$this->username = $username;
			$this->email = $email;

	}	

//This will return the private variable using a Encapulation
	public function getFristname(){
		return $this->firstname;
	}

	//These are accessors 
	public function getSurname(){
		return $this->username;
	}

	public function getFullname(){
		return $this->firstname.' '.$this->username;
	}

	//setters or mutators
	public function getEmail($email){
		return $this->email = $email;
	}

	// public static function getLastId(){
	// 	return self::$lastid;
	// }




	public function getusername(){
		return $this->username;
	}

}
 ?>
