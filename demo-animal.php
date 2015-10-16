<?php 
class Animal{
	private $color;
	private $breed;
	private $energy;
	private static $animals_count;

	public function __construct($c, $b = "Shepherd")
	{
		echo "__construct for Animal <br/><br/>";
		$this->energy = 100;
		$this->breed = $b;
		$this->color = $c;
		self::$animals_count++;
	}
	
	public function make_sound($intense)
	{
		echo "animal makes sound with $intense";
	}

	public function eat($food, $quantity)
	{
		echo "animal is eating $quantity $food. Am-am-am <br/>";
		$this->energy += 2 * $quantity;
		if($this->energy > 100){
			$this->energy = 100;
		}
	}

	public function walk($distance)
	{
		echo "animal is going outside $distance km distance <br/>";
		
		$this->energy -= $distance;
		if($this->energy < 1){
			$shortened = $distance + $this->energy;
			echo "animal is critically tired and is going home earlier with $shortened km <br/>";
		}
	}
	public function show_info()
	{
		echo "Breed: $this->breed <br/>
			Color: $this->color <br/>
			Energy: $this->energy <br/>";
	}
	public function __set($name, $value){
        
        echo "Setting '$name' to '$value' <br/>";
        if (property_exists($this, $name)) {
        	$this->$name = $value;
    	}else{
        	echo "property $name does NOT exist <br/>";
        }
    }
    public function __get($name)
    {
        echo "Getting '$name' <br/>";
        if (property_exists($this, $name)) {
        	return $this->$name;
        }else{
        	echo "property $name does NOT exist <br/>";
        }
	}
}

?>
