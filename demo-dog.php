<?php
require_once('demo-animal.php');
class Dog extends Animal{
	private $name;
	public static $dogs_count = 0;

	public function __construct($c, $n="Balkan", $b = "Shepherd"){
		echo "__constuct Dog<br/>";
		parent::__construct($c, $b);
		$this->name=$n;
		self::$dogs_count++;
	}

	public function show_info(){
		echo "Name: $this->name<br/>";
		parent::show_info();
	}

	public function walk($distance){
		parent::walk($distance);
		echo "<h4> $this->name marked $distance trees.<br/></h4>";
	}
}

echo "<h3> Dogs count:" . Dog::$dogs_count . "</h3>";
$johny = new Dog("blue");
$rony = new Dog("Rony", "setter", "brown");
echo "<h3> johny count:" . $johny::$dogs_count . " / " . $rony::$dogs_count . "</h3>";
$johny = new Dog("blue");
echo "<h3> Dogs count:" . Dog::$dogs_count . "</h3>";

$johny->walk(15);
$johny->show_info();
$johny->eat("bones", 2); 
$johny->show_info();
$rony->show_info();
$rony->color = "red";
echo $rony->color;
$totalEnergy = $johny->energy + $rony->energy;
if($johny->energy > $rony->energy)
{
	echo "johny wins";
}
echo $rony->legs;


?>
