<?php
class Car {
  public  $color ='red';
  public  $fuel;
  public  $brand;
  public function __construct($color,$fuel,$brand){
      $this->color = $color;
      $this->brand = $brand;
      $this->fuel = $fuel;
      echo $color;                   ;
      //echo  __CLASS__;
      //echo __METHOD__;
    //destruct;
  }
  
  public function skor() {
      //echo "aaa";
      echo $this->color;
  }
  public function spe($champa) {
    $caxs = $champa / $this->fuel;
    return $caxs; 
  }
  
}       
    $car2 = new Car('1','1','1');
    echo $car2->spe(44);
    
    /*$car1 = new Car;
    $car1 -> brand = "bmw";
    // unsety jnjuma popoxakany, destructic shut, chi spasu scriptin
    $car1 -> fuel ="44";
    $car1 -> color ='white';
    //$car1 ->skor();
    echo $car1 ->spe(440);
    //$car2 = new Car;
     */
    echo "<pre>";
    //echo print_r($car1);

?>