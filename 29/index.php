<?php
//Порождающие
//Синглтон, Фабрика, Строитель (Builder)

//Builder
//DIV
//Высота, ширина, бэсграунд, цвет шрифта

class House {
    private $_square = 50;
    private $_height = '5';
    private $_color = 'Lak';
    private $_material = 'Wood';

    public function __construct($square, $height, $color, $material) {
        $this->_square = $square;
        $this->_height = $height;
        $this->_color = $color;
        $this->_material = $material;
    }
    //methods
}

class HouseBuilder {
    private $_square = 50;
    private $_height = '5';
    private $_color = 'Lak';
    private $_material = 'Wood';

    public function setSquare($square = 100) {
        $this->_square = $square;
        return $this;
    }
    public function setHeight($height = 5) {
        $this->_height = $height;
        return $this;
    }
    public function setColor($color = 'red') {
        $this->_color = $color;
        return $this;
    }
    public function setMaterial($material = 'wood') {
        $this->_material = $material;
        return $this;
    }
    public function BuildHouse() {
        return new House($this->_square, $this->_height, $this->_color, $this->_material);
    }

}

$build = new HouseBuilder();
$build->setColor('GREEN');
$house = $build->BuildHouse();
var_dump($house);


//$client1 = new House(100, 10, 'red', 'beton');
//var_dump($client1);
//$client2 = new House('кирпич');
