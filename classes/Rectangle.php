<?php
declare(strict_types=1);

namespace classes;

use classes\Circle;
use interfaces\Shape;

include_once 'interfaces/Shape.php';
include_once 'classes/Circle.php';

/**
 * 
 */
class Rectangle extends Circle implements Shape  {
  
  public function area(float $radious,float $length,float $width):float{
    return $length*$width;
  }
  
  public function circumferencr(float $radious,float $length,float $width):float{
    return 2*$length*$width;
  }
}
