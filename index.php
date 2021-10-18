<?php

require_once 'bicycle.php';

$bike = new Bicycle('blue');
var_dump($bike);


$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';

require_once 'car.php';

$car = new Car('blue', 4, 'Cola');
var_dump($car);

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h ' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h ' . '<br>';
echo $car->brake();
