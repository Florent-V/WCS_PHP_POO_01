<?php 

class Car
{
    public const TYPE_OF_ENERGY = ['diesel', 'gasoline', 'LPG', 'ethanol', 
    'hydrogen', 'hybrid', 'electricity', 'other'];

    private int $nbWheels=4;
    private int $currentSpeed=0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel=100;

    /* CONSTRUCTEUR */

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->setNbSeats($nbSeats);
        $this->setEnergy($energy);
    }

    /* METHODS */

    public function start() : string
    {
        $this->currentSpeed = 1;
        return "Let's go slowly!!";
    }
    
    public function forward(int $velocity=10) : string
    {
        if (($this->currentSpeed+$velocity)>130) {
            $this->currentSpeed = 130;
            return "Max Speed Reach !";
        } else {
            $this->currentSpeed += $velocity;
            return "Increasing Speed !";
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-=5;
            $sentence .= "Brake !!!" . '<br>';
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /* GETTERS & SETTERS */

    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats) : void
    {
        $this->nbSeats = ($nbSeats<0) ? 4 : $nbSeats;
    }

    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels) : void
    {
        $this->nbWheels = ($nbWheels<0) ? 4 : $nbWheels;
    }

    public function getColor() : string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getEnergy() : string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : void
    {
        $this->energy = in_array($energy, self::TYPE_OF_ENERGY) ? $energy : 'other';
    }

    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel) : void
    {
        if ($energyLevel > 100) {
            $this->energyLevel = 100;
        } elseif ($energyLevel < 0) {
            $this->energyLevel = 0;
        } else {
            $this->energyLevel = $energyLevel;
        }
    }

}





?>