<?php

/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 07.12.2016
 * Time: 22:33
 */
abstract class Figure {
    private $perimeter;
    private $area;
    protected $className;
    public function getPerimeter($a, $b,$figureName)
    {
        $this->perimeter = ($a + $b) * 2;
        var_dump(__NAMESPACE__);
        echo "Perimeter of {$figureName} equal {$this->perimeter}\n";
    }

    public function getArea($a, $b)
    {
        $this->area = $a * $b;
        echo "Area of {figure} equal {$this->area}\n";
    }
}

class Circle extends Figure {
    private $param;

}

class Square extends Figure {
    private $width;
    private $height;
    protected $className = 'square';
    function getPerim()
    {
        echo $this->getPerimeter($this);
    }
}

class Rectangle extends Figure {

}

echo '<pre>';
$square = new Square();
$square->getPerimeter(5,8,'square');
$square->getArea(15,20);
var_dump($square);
echo get_class($square);
