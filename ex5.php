<?php

declare(strict_types=1);

/* EXERCISE 5
  Copy the class of exercise 1.
  change the properties to private.
  fix the errors without using getter and setter functions.
  change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
  protected $temperature, $color, $price;
  private const BAR_NAME = 'Het Vervolg';

  // CONSTRUCT
  public function __construct(string $color, float $price, string $temperature = "cold")
  {
    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
  }

  // GETTERS

  // SETTERS

  // METHODS
  public function getInfo(): string
  {
    return 'The temperature is ' . $this->temperature . ' and the color is ' . $this->color . '.';
  }

  public function getPubName(): string
  {
    return 'Let\'s go drinking in ' . self::BAR_NAME;
  }
}

class Beer extends Beverage
{
  private $name, $alcohol_percentage;

  public function __construct(string $name, float $alcohol_percentage, string $color, float $price, string $temperature = "cold")
  {
    parent::__construct($color, $price, $temperature = "cold");
    $this->name = $name;
    $this->alcohol_percentage = $alcohol_percentage;
  }

  public function getAlcoholpercentage(): string
  {
    return 'The alcohol percentage is: ' . $this->alcohol_percentage . ' %';
  }
}

$duvel = new Beer('Duvel', 8.5, 'Blond', 3.5);

echo $duvel->getInfo();
echo '<br/>';
echo $duvel->getPubName();
echo '<br/>';
echo '<br/>';

$cola = new Beverage('Dark', 2);

echo $cola->getInfo();
echo '<br/>';
echo $cola->getPubName();
echo '<br/>';
