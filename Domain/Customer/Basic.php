<?php 
namespace Bookstore\Domain\Customer;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;

class Basic extends Person implements Customer{

	public function getMonthylyFee(){
		return 5.0;
	}


	public function getAmountToBorrow(){
		return 3;
	}


	public function getType(){
		return 'Premium';
	}

	public function Pay($amount){
		return 'Paying '.$amount;
	}	

		public function isExtentOfTaxes(){
		return 'You have o pay Taxes';
	}
}

 ?>