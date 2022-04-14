<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'gazole',
        'essence',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start(): void
    {
        if ($this->getHasParkBrake() === true){
            throw new Exception("Le frein à main est actif.");
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Set the value of hasParkBrake
     */ 
    public function setParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
}
