<?php 

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;
use Bookstore\Domain\Payer;


function autoloader($classname){
	$lasSlash = strpos($classname, '\\')+1;
	$classname = substr($classname, $lasSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__.'/'.$directory.'.php';
	require_once $filename;
}

spl_autoload_register('autoloader');  

function checkValid(Customer $customer,$books){
	return $customer->getAmountToBorrow()>= count($books);
}

function processPayment(Payer $payer,$amount){
	if ($payer->isExtentOfTaxes()) {
		return 'No taxes are needed';
	}else{
		$amount *2.57;
	}

	$payer->Pay($amount);
}

$Customer_One = new Basic(1,"Bruce",'name ','brewwewew@gmail.com',2);
$harry_potter = new Book(12121212,'Deathly Howllows','JK Rowling',3);
echo '<pre>';
var_dump($Customer_One->getId());
echo '</pre>';
 

//var_dump( checkValid($Customer_One,$harry_potter));
 ?>