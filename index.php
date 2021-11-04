<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
echo '<br/>';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


// CHALLENGE 1
echo '<br>';
//echo 'Le vélo accélère : ' . $bike->forward() . '<br>';
//echo 'Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo 'Le vélo freine :' . $bike->brake() . '<br>';
//echo 'Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';

//echo 'La voiture accélère : ' . $car->forward() . '<br>';
//echo 'Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
//echo 'La voiture freine : ' . $car->brake() . '<br>';
//echo 'Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';

$truck = new Truck('orange', 3, 'fuel', 30);
$truck -> setLoading(20);
echo $truck -> isFull();
echo '<br>';
echo $truck->getLoading();
echo $truck->isFull();
echo '<br>';
$truck->setLoading(80);
echo $truck->getLoading();
echo $truck->isFull();
echo '<br>';
echo $truck->forward();
echo $truck->brake();
echo '<br>';
var_dump($truck);