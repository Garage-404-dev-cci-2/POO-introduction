<?php
class Formule1
{
   private $speed = 0;

   public function drive()
   {
      echo "Vroum vroum à " . $this->speed . " km/h <br>";
   }

   public function shiftGear($vitesse)
   {
      $this->speed += $vitesse;
   }

}

$myFomrule1 = new Formule1();
$myFomrule1->drive();
$myFomrule1->shiftGear(20);
$myFomrule1->drive();
$myFomrule1->shiftGear(400);
$myFomrule1->drive();
