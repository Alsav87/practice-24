<?php

interface speedeble {
    public function measuredSpeed();
}
interface powerfuble {
    public function turboEngine();
}

interface containable {
    public function payload();
}
interface scoopable {
    public function scooping();
}

class Car implements Speedeble, Powerfuble  {
    public function movement()
    {
        echo $this->carName . " автомобиль ";
    }
    public function measuredSpeed() {
        echo $this->carName ."скоростной";
    }
    public function turboEngine() {
        echo $this->carName ."двигатель с турбонаддувом";
    }
}

class Bus  implements Powerfuble, Containable {
    public function movement()
    {
        echo $this->busName . " автобус ";
    }
    public function measuredSpeed() {
        echo $this->busName ."скоростной";
    }
    public function payload()
    {
        echo $this->busName . "вмещает 40 человек";
    }
    public function turboEngine() {
        echo "двигатель с турбонаддувом";
    }
    
}
class Excavator implements  Scoopable {
    public function movement()
    {
        echo $this->carName . " экскаватор ";
    }
    public function scooping () {
        echo $this->carName ."имеет большой ковш";
    }
    
}


$car = New Car();
$bus = New Bus();
$excavator = New Excavator();
$car->movement();
$car->measuredSpeed();
echo", ";
$car->turboEngine();
echo "<br>";
$bus->movement();
$bus->measuredSpeed();
echo", ";
$bus-> payload();
echo "<br>";
$excavator->movement();
$excavator->scooping();

