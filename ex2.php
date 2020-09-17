<?php

declare(strict_types=1);

/* EXERCISE 2
  Make class beer that extends from Beverage.
  Create the properties name (string) and alcoholpercentage (float).
  Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
  Remember for now we will use properties and methods that can be accessed from everywhere.
  Make a getAlcoholpercentage function which returns the alocoholpercentage.
  Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
  Also the name equal to Duvel and the alcohol percentage to 8,5%
  print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
  Make sure that each print is on a different line.

  Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64

  USE TYPE HINTING EVERYWHERE!
*/

include 'ex1.php';

class Beer extends Beverage
{
  public $name, $alcohol_percentage;

  public function __construct(string $name, float $alcohol_percentage, string $color, float $price, string $temperature = "cold")
  {

    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
    $this->name = $name;
    $this->alcohol_percentage = $alcohol_percentage;
  }

  public function getAlcoholpercentage(): string
  {
    return 'The alcohol percentage is: ' . $this->alcohol_percentage . ' %';
  }
}

$duvel = new Beer('Duvel', 8.5, 'Blond', 3.5);
$fanta = new Beverage('Brown', 2.5, 'hot');

echo $duvel->alcohol_percentage . '<br/>';
echo $duvel->getAlcoholpercentage() . '<br/>';
echo $duvel->color . '<br/>';
echo '<br/>';
echo $duvel->getInfo() . '<br/>';
echo '<br/>';
echo '<br/>';
echo $fanta->getAlcoholpercentage() . '<br/>';
