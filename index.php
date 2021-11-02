<?php
// index.php

require_once 'bicycle.php';
$bike = new Bicycle('blue', 23);
var_dump($bike); 
echo '<br/>';


require_once 'car.php';
$car= new Car('yellow','2','gasoline');


// then, another dump.
// Moving bike

echo '<br>';
echo 'Le vélo accélère : ' . $bike->forward() . '<br>';
echo 'Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo 'Le vélo freine :' . $bike->brake() . '<br>';
echo 'Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';


echo '<br>';

echo 'La voiture accélère : ' . $car->forward() . '<br>';
echo 'Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo 'La voiture freine : ' . $car->brake() . '<br>';
echo 'Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';

var_dump($bike, $car);


?>