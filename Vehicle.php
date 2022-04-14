<?php



class Vehicle
{
 
    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats;

    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    // /////////// Méthode qui fait avancer le véhicule //////////////////
     public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    // ////////// Méthode qui fait freiner le véhicule ///////////////
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

    // ////////// Retourne la vitesse courante. ///////////////
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    // /////////// Modifie la vitesse courante. //////////////
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    // /////////// Retourne la couleur ///////////////
    public function getColor(): string
    {
        return $this->color;
    }

    // ///////// Modifie la couleur ///////////
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // /////////// Retourne le nombre de place ///////////////
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    // /////////// Modifie le nombre de place ///////////////
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    // /////////// Retourne le nombre de roues ///////////////
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    // /////////// Modifie le nombre de roues ///////////////
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}