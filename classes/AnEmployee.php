<?php
declare (strict_types=1);
namespace classes;
use classes\Employee;
include_once 'Employee.php';

/**
 * A subclass of the super class Employee which is also a abstract class.
 */
class AnEmployee extends Employee {

  public function __construct(string $firstname , string $lastname, string $job, float $salary) {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->job = $job;
    $this->salary = $salary;
  }
  
  public function getFirstName(): string {
    return $this->firstname;
  }
  
  public function getLastName(): string {
    return $this->lastname;
  }
  
  public function getJob(): string {
    return $this->job;
  }
  
  public function getSalary(): float {
    return $this->salary;
  }
}
