<?php 
namespace Bookstore\Domain;

interface Payer {
	public function Pay($amount);
	public function isExtentOfTaxes();
}

 ?>