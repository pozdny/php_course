<?php
//Порождающие
//Синглтон, Фабрика, Строитель (Builder)

//Builder
//DIV
//Высота, ширина, бэсграунд, цвет шрифта

class Div {
    private $_width = 100;
    private $_height = 50;
    private $_background = 'blue';
    private $_fontcolor = 'white';

    public function __construct($width, $height, $background, $fontcolor) {
        $this->_width = $width;
        $this->_height = $height;
        $this->_background = $background;
        $this->_fontcolor = $fontcolor;
    }
    //methods
}

class DivBuilder {
    private $_width = 100;
    private $_height = 50;
    private $_background = 'blue';
    private $_fontcolor = 'white';

    public function setWidth($width = 100) {
        $this->_width = $width;
        return $this;
    }
    public function setHeight($height = 50) {
        $this->_height = $height;
        return $this;
    }
    public function setBackground($background = 'blue') {
        $this->_background = $background;
        return $this;
    }
    public function setMaterial($fontcolor = 'white') {
        $this->_fontcolor = $fontcolor;
        return $this;
    }
    public function BuildDiv() {
        return new Div($this->_width, $this->_height, $this->_background, $this->_fontcolor);
    }

}

$div = new DivBuilder();
$divElement = $div->setHeight(100)->setHeight(80);
//$div = $div->BuildDiv();
var_dump($divElement);

