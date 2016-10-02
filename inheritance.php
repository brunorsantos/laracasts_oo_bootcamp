<?php 


/**
*
*/
 abstract class Shape
{
	protected $color;


	public function __construct($color = 'red')
	{
		$this->color = $color;
	}

	public abstract function getArea();


}


/**
* 
*/
class Square extends Shape
{
	protected $base = 4;


	public function getArea()
	{
		return $this->base* $this->base;
	}

}

class Triangle extends Shape
{
	protected $base = 4;

	protected $height = 7;

	public function getArea()
	{
		return .5 * $this->base * $this->height;
	}
}

class Circle extends Shape
{
	protected $radius = 6;

	public function getArea()
	{
		return M_PI * pow($this->radius,2);
	}


	
}

$circle = new Circle;
var_dump($circle->getArea());
var_dump((new Triangle)->getArea());