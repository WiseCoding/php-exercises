<?php

declare(strict_types=1);


/* EXERCISE 3
  Copy the code of exercise 2 to here and delete everything related to cola.
  Make all properties private.
  Make all the other prints work without error.
  After fixing the errors. Change the color of Duvel to light instead of blond and
  also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).

  Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color."
  Make sure that u use the variables and not just this text line.
  Print this method on the screen on a new line.

  USE TYPE HINTING EVERYWHERE!
*/

class Beverage
{
  private $temperature, $color, $price;

  public function __construct(string $color, float $price, string $temperature = "cold")
  {
    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
  }

  // GETTERS
  public function getInfo(): string
  {
    return "The temperature is " . $this->temperature . " and the color is " . $this->color . ".";
  }
}

class Beer extends Beverage
{
  private $name, $alcohol_percentage;

  public function __construct(string $name, float $alcohol_percentage, string $color, float $price, string $temperature = "cold")
  {

    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
    $this->name = $name;
    $this->alcohol_percentage = $alcohol_percentage;
  }

  // GETTERS
  public function alcoholInfo(): string
  {
    return 'The alcohol percentage is: ' . $this->alcohol_percentage . ' %';
  }
  public function getAlcohol_percentage(): float
  {
    return $this->alcohol_percentage;
  }
  public function getColor(): string
  {
    return $this->color;
  }

  // SETTERS
  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  // METHODS
  public function beerInfo(): string
  {
    return 'Hi i\'m ' . $this->name . ' and have an alcohol percentage of ' . $this->alcohol_percentage . '% and I have a ' . $this->color . ' color. It costs ';
  }
}

// INSTANTIATION
$duvel = new Beer('Duvel', 8.5, 'Blond', 3.5);

// ECHOES
echo $duvel->getAlcohol_percentage() . '<br/>';
echo '<br/>';
echo $duvel->alcoholInfo() . '<br/>';
echo '<br/>';
echo $duvel->getColor() . '<br/>';
echo '<br/>';
echo $duvel->setColor('Light');
echo $duvel->getColor() . '<br/>';
echo '<br/>';
echo $duvel->getInfo() . '<br/>';
echo '<br/>';
echo $duvel->beerInfo() . '<br/>';
echo '<br/>';
