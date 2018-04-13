<?php
declare(strict_types=1);
namespace interfaces;

interface Shape {
  public function area(float $radious,float $length,float $width):float;
  public function circumferencr(float $radious,float $length,float $width):float;
    
  
}
