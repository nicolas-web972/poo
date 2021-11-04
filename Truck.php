<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    
    private string $energy;
    private int $energyLevel;
    private int $Capacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $Capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->Capacity = $Capacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        if ($loading <= $this->Capacity) {
            $this->loading = $loading;
        } else {
            $this->loading = $this->Capacity;
        }
    }

    public function getCapacity(): int
    {
        return $this->Capacity;
    }

    public function setCapacity(int $Capacity): void
    {
        $this->Capacity = $Capacity;
    }

    public function isFull()
    {
        $sentence = "";
        if ($this->loading < $this->Capacity) {
            $sentence .= "In filling.";
        } else {
            $sentence .= "Full.";
        }
        return $sentence;
    }
}