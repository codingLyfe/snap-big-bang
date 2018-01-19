<?php

/**
 * Raj is sick and tired of Leonard and Sheldon arguing
 * He decides to model the two friends' characteristics:
 * 	name: string
 * 	stubborness: float
 *
 * write a short class with these state variables
 * then start a method, argue(), that will echo "I AM RITE" when called
 */

/**
 * Class BigBangScientist
 */
class BigBangScientist {

  public $name;
  public $stubborness;

	public function argue() : void{
		echo "I AM RITE" . PHP_EOL;
	}
}


$leonard = new BigBangScientist();
$sheldon = new BigBangScientist();

$leonard->name = "Leonard";
$sheldon->name = "Sheldon";

$leonard->stubborness = 0.72;
$sheldon->stubborness = 0.9992812;