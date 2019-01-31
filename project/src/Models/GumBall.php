<?php 

namespace App\Models;

//die("gumball loaded");

class GumBall {

	private $nbofballs;

	public function setBalls($nb)
	{
		$this->nbofballs = $nb;
	}

	public function getBalls()
	{
		return $this->nbofballs;
	}

	public function turnWheel()
	{
		$this->nbofballs -= 1;
		$this->nbofballs = ($this->nbofballs<0) ? 0 : $this->nbofballs;
	}

	public function displayState(){
		print("<br>\n==> nbofballs : ".$this->nbofballs."\n<br>");
	}
}
