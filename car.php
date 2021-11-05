<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;

    private bool $hasParkBrake = false;

  
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(): void
    {
        if ($this->hasParkBrake) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }

    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new LogicException("Frein à main activé");
        }
        $this->currentSpeed = 0;

        return 'Pret à partir';
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

}


