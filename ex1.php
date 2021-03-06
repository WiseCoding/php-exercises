<?php

declare(strict_types=1);

/* EXERCISE 1
  Create a class beverage.
  Create the properties color (string), price (float) and temperature (string) and also foresee a construct.

  Have a default value "cold" in the construct for temperature.
  Remember for now we will use properties and methods that can be accessed from everywhere.
  Make a getInfo function which returns "This beverage is <temperature> and <color>."
  Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
  print the getInfo on the screen.
  print the temperature on the screen.

  USE TYPE HINTING EVERYWHERE!
*/

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

// INSTANTIATE
$cola = new Beverage('black', 2);

// ECHOES
echo $cola->temperature;
echo '<br/>';
echo $cola->getInfo();
echo '<br/>';
