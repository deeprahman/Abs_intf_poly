<?php

declare (strict_types=1);

namespace classes;

use interfaces\Shape;

include_once 'interfaces/Shape.php';
;
/**
 * Shape of a circle
 *
 * @author deep
 */
class Circle implements Shape  {
  protected $width;
  protected $length;
  protected $radious;
  const PI=3.14;

    public function __construct(float $radious=0.0, float $width=0.0, float $length=0.0){
    $this->radious=$radious;
    $this->width=$width;
    $this->length=$length;
  }
  
  public function area(float $radious,float $length,float $width): float {
    return PI*$radious*$radious;
  }
  
  public function circumferencr(float $radious,float $length,float $width): float {
    return 2*PI*$radious;
  }
}
