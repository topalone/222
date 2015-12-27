<?php
interface A{
	public function compare(  ) ;
}

class B implements A{
	
	public function compare(  )
	{
		if ($a > $b) {
			echo $a . ">" . $b;
		}
		elseif ($a == $b) {
			echo $a . "=" . $b;
		}
		else{
			echo $a . "<" . $b;
		}
	}
}

		




?>