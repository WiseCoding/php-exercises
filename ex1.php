<?php

declare(strict_types=1);

include 'ex2.php';

class Beverage
{
  public $temperature, $color, $price;

  public function __construct(string $color, float $price, string $temperature = "cold")
  {
    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
  }

  public function getInfo(): string
  {
    return "Lets drink " . $this->temperature . " and " . $this->color . ".";
  }
}
