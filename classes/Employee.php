<?php
declare (strict_types=1);

namespace classes;

/**
 * An abstract as well as super class.
 */
abstract class Employee {
  protected $firstname;
  protected $lastname;
  protected $job;
  protected $salary;
  
  public $array=[];




  abstract public function __construct(string $firstname,string$lastname,string $job, float $salary);
  abstract public function getFirstName(): string;
  abstract public function getLastName(): string;
  abstract public function getJob(): string;
  abstract public function getSalary(): float;
          
}

