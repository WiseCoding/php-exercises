<?php

declare(strict_types=1);

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
    return "The temperature is " . $this->temperature . " and the color is " . $this->color . ".";
  }
}
