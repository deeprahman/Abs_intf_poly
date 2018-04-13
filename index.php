<?php
declare (strict_types=1);


use classes\AnEmployee;
use classes\Circle;
use classes\Rectangle;

include_once 'classes/AnEmployee.php';
include_once 'classes/Circle.php';
include_once 'classes/Rectangle.php';





$object_employee= new AnEmployee("Deep","Rahman","Web Dev",0.0);

var_dump($object_employee);

echo '<br><br>';

$object_circle=new Circle(2.1);

var_dump($object_circle);

echo '<br><br>';

$object_rectangle=new Rectangle(0.0,2.0,2.0);

var_dump($object_rectangle);




