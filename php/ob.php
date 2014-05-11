<?php 


class Person{
//public $first_name = 'Jonathon';
public $first_name = "Jonathon";
}


$person1 = new Person();
print $person1->first_name."";




	Class fruit{
		public $skin;
		private $seeds;

		function __construct($setseeds, $setskin){
		$this->seeds = $setseeds;
		$this->skink = $setskin;
		}

		public function displayseeds(){
			return $this->seeds;
		}
	}


	$orange = new Fruit('distributed','not edible');
	$apple = new Fruit('in core','edible');
	
	print"Orange seeds are ".$orange->displayseeds().".<br/>";
	print"Apple seeds are".$apple->displayseeds().".<br/>";
	print"Orange skins is".$orange->skin.".<br/>";
	print"Apple skins is ".$apple->skin.".<br/>";
	
	$superorange = new Fruit('seedless', 'unknown');
	$superorange->skin = 'yummy';
	
	print"Super-Orange Skin is ".$superorange->skin;
?>