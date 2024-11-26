<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string
    {
        return 'Je démarre ma voiture';
    }

    public function forward(): string
    {

        return "J'enclanche la 1ère vitesse et j'avance";
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
            $this->currentSpeed = $currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }

    public function setNbWheels(string $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }

    public function brake()
    {
        $sentence = "";

        $this->energyLevel = 0;
        $sentence = " je m'arrête pour faire le plein";
        return $sentence;
    }

}
?>