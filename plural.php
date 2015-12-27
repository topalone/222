<?php

class plural
{
	private $a1;
	private $a2;
	private $b1;
	private $b2;
	function __construct()
	{
		$this->a1 = 0;
		$this->b1 = 0;
		$this->a2 = 0;
		$this->b2 = 0;
	}
	function initialize($a , $b , $a0 , $b0)
	{
		$this->a1 = $a;
		$this->b1 = $b;
		$this->a2 = $a0;
		$this->b2 = $b0;
	}
	function add(){
		$a0 = $this->a1 + $this->a2;
		$b0 = $this->b1 + $this->b2;
		echo "(" . $this->a1 . "+" . $this->b1 . "i ) + (" . $this->a2 . "+" . $this->b2 . "i ) = " . $a0 . "+" . $b0 . "i<br />";
	}
	function subtraction(){
		$a0 = $this->a1 - $this->a2;
		$b0 = $this->b1 - $this->b2;
		echo "(" . $this->a1 . "+" . $this->b1 . "i ) - (" . $this->a2 . "+" . $this->b2 . "i ) = " . $a0 . " + " . $b0 . "i<br />";
	}
}


$plural_1 = new plural();
$plural_1-> initialize(1,2,3,4);
$plural_1-> add();
$plural_1-> subtraction();
?>