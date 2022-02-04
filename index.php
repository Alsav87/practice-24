<?php

//абстрактный класс

abstract class  Transport {
    public $carName = "Автомобиль";
    public $busName = "Автобус";
    public $excavatorName = "Экскаватор";
    
    abstract function movement();
    abstract protected function turnOnWiper();
    abstract protected function horn();
}

class Car extends Transport {
    public function movement()
    {
        echo $this->carName . " Едет вперед и назад ";
    }
    public function turnOnWiper() 
    {
        echo $this->carName . " : включить дворник ";
    }
    public function horn() 
    {
        echo $this->carName . " : посигналить ";
    }


}

class Bus extends Transport {
    public function movement()
    {
        echo $this->busName . " Едет вперед и назад ";
    }
    public function turnOnWiper() 
    {
        echo $this->busName . " : включить дворник ";
    }
    public function horn() 
    {
        echo  $this->busName . " : посигналить ";
    }


}
class Excavator extends Transport {
    public function movement()
    {
        echo $this->excavatorName . " Едет вперед и назад ";
    }
    public function turnOnWiper() 
    {
        echo $this->excavatorName . " : включить дворник ";
    }
    public function horn() 
    {
        echo  $this->excavatorName . " : посигналить ";
    }


}

$car = New Car();
$bus = New Bus();
$excavator = New Excavator();

$car->movement();
echo "<br>";
$bus->movement();
echo "<br>";
$car->turnOnWiper();
echo "<br>";
$bus->turnOnWiper();
echo "<br>";
$car->horn();
echo "<br>";
$bus->horn();
echo "<br>";
$excavator->movement();
echo "<br>";
$excavator->turnOnWiper();
echo "<br>";
$excavator->horn();