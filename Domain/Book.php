<?php 
namespace Bookstore\Domain; 

class Book {
	//properties are like variables
	public 	$isbn;
	public 	$title;
	public 	$author;
	public 	$available;

	//Magic method __construct

	public function __construct($isbn,$title,$author,$available){
			$this->isbn = $isbn;
			$this->title = $title;
			$this->author = $author;
			$this->available = $available;

	}
//Methods are like functions

	public function getTitle(){
		$result = $this->title.' by '.$this->author;

		if (!$this->available) {
				$result = 'Sorry not available';
			}
		return $result;
	}

	public function getCopy(){
		if ($this->available<1) {
			return false;
		}else{
			$this->available--;
			return true;
		}
	}

}
$harry_potter = new Book(12121212,'Deathly Howllows','JK Rowling',3);
0;

if ($harry_potter->getCopy()) {
	echo 'Here is your title '. $harry_potter->title.'<br>';
}else{
	echo "Sorry it is not available";
}



 ?>