<?php
    class Vehicle {

        public $color;
        public $speed;
        public $brand;

        public function ss($distance) {
            $time = $distance / $this->speed;
            return $time;
        }
    }
    class Byce extends Vehicle {
        public $type;
        const CPH = 400;
        //$time2 = parent::ss($distance);
        //parentov super-classi metodnes ogtagorcum
        public function cb($distance) {
            //$time = $this->ss($distance);
            //$calori = $time * self::CPH;
            return parent :: ss($distance) * 11.7 ;
        }
    }
    class Car extends Vehicle {
        public $fuel;

        public function fc($distance) {
        $result = ($this->fuel * $distance) / 1000 ;
        return $result;
      }
    }

    $car1 = new Car;
    //print_r($car1);
    $car1->speed = 200;
    //print_r($car1);
    $car1->fuel = 22;

    $bicycle = new Byce;
    $bicycle->speed = 55;

    $distance = 900;
    echo '<br>car 1 time  '   . $car1->ss($distance);
    echo '<br>byce time   '    .  $bicycle->ss($distance);

    echo '<br>';

    echo '<br> car1 fc  '. $car1->fc($distance);
    echo '<br> car1 fc  '. $bicycle->cb($distance);

?>