<?php

require '../Transaction.php';


$amount = (new Transaction(100, 'Transaction 1'))
	->addTax(8)
	->applyDiscount(10)
	->getAmount();



var_dump($amount);
