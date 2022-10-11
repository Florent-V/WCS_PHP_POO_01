<?php 

require './bicycle.php';
require './car.php';

/* code d'essai des méthodes */

$bike = new Bicycle('blue');
$bike->setCurrentSpeed(10);

var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
$bike->dump();

$car = new Car('blue', 4, 'diesel');
var_dump($car);
echo $car->setNbSeats(6) . '<br>';
echo $car->getNbSeats() . '<br>';

echo $car->setNbWheels(6) . '<br>';
echo $car->getNbWheels() . '<br>';


echo $car->setColor('red')  . '<br>';
echo $car->getColor()  . '<br>';

echo $car->getCurrentSpeed()  . '<br>';

echo $car->setEnergy('electricity')  . '<br>';
echo $car->getEnergy()  . '<br>';

echo $car->setEnergyLevel(90)  . '<br>';
echo $car->getEnergyLevel()  . '<br>';

echo $car->start();
var_dump($car);

$car2 = new Car(nbSeats:-7, energy:'LPG', color:'blue');
var_dump($car2);

echo $car->forward();
var_dump($car);

echo $car->forward();
var_dump($car);

echo $car->forward(50);
var_dump($car);

echo $car->forward(50);
var_dump($car);

echo $car->forward(50);
var_dump($car);

echo $car->forward(50);
var_dump($car);

echo $car->brake();
var_dump($car);

echo $car->setEnergyLevel(50);
var_dump($car);

echo $car->setEnergyLevel(2110);
var_dump($car);



?>