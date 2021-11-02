<?php


//propriétés

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;


    //construct
public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}

    //methods

public function getColor(): string
{
    return $this->color;
}

public function setColor(string $color): void
{
     $this->color= $color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    $this->CurrentSpeed;
}

public function getenergyLevel():int
{
    return $this -> energyLevel;
}
public function setEnergyLevel(int $energyLevel): void
{
    $this->energyLevel = $energyLevel;
}

public function start(): string 
{
    $this -> currentSpeed = 0;
    return "Start !";

}

public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}


}
?>
