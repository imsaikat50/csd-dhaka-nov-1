<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 11/11/17
 * Time: 11:40 AM
 */


interface CarInterface
{
    public function showCarName();
}

class Factory
{

    public function __construct()
    {

    }


    public static function create($className)
    {

        switch($className)
        {
            case 'CAR':
                return new FerrariCar();
                break;

            case 'House':
                return new House();
                break;

            case 'Money':
                return new Money();
                break;

            case 'BMW':
                return new BMW();
                break;
        }


    }

}

class Car implements CarInterface
{
    public function showCarName()
    {
        // TODO: Implement showCarName() method.
    }
}

class Gorib
{
    public $house;
    public $car;
    public function __construct($house, CarInterface $car)
    {
        $this->house =  $house;
        $this->car =  $car;
    }


}


$milonHouse = new House();
$mizanCar = new FerrariCar();

$milonHouse = Factory::create('House');
$milonCar = Factory::create('BMW');
$mizanRickshaw = Factory::create('Rickshaw');

$milon = new Gorib($milonHouse, $mizanRickshaw);