<?php 

namespace Bookstore\Domain; 

interface  Customer extends Payer{
	
	 public function getMonthylyFee();	
	 public function getAmountToBorrow();	
	 public function getType();	


}
 ?>
