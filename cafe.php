<?php

class MachineACafe 
{
    private $marque;
    private $cafe = 0; 
    private $enFonction;

    public function __construct(string $marque)
    {
        $this->marque = $marque;
    }

    public function allumage(bool $switch)
    {
        $this->enFonction = $switch;
        if($switch){
            echo "{$this->marque} est en fonction <br>";
        }
        else{
            echo "{$this->marque} est éteinte <br> ";
        }
    }

    public function faireDuCafe()
    {
        if($this->enFonction){
            if($this->cafe){
                echo "le café est pret <br>";    
      
            }else{
                echo "il n'y a plus de dosette dans la machine {$this->marque} <br>";
            }
        }else{
            echo " la machine {$this->marque} est éteinte <br>";
        }
        
        $this->cafe --;

    }

    public function mettreUneDosette()
    {
        $this->cafe ++;

        echo " je met une dosette, il y a {$this->cafe} dosettes dans la machine {$this->marque} <br>";
    }
}

$machine = new MachineACafe("Senseo");
$machine->allumage(true);
$machine->mettreUneDosette();
$machine->mettreUneDosette();
$machine->mettreUneDosette();
$machine->faireDuCafe();
$machine->faireDuCafe();
$machine->faireDuCafe();
$machine->allumage(false);
$machine->faireDuCafe();
