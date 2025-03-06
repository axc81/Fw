<?php 

class testM{
	private $a = 10;

	public function __construct(){

	}
	public function testP(){
		// var_dump($this->a);
		$this->a = 20;
		return $this->a;
	}	
}

?>