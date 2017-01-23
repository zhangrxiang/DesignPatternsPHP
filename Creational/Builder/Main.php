<?php
/**
 * Created by PhpStorm.
 * User: zhangrxiang
 * Date: 17-1-23
 * Time: 下午9:52
 */

use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;

include "../../vendor/autoload.php";
function testCanBuildTruck()
{
    $truckBuilder = new TruckBuilder();
    $newVehicle = (new Director())->build($truckBuilder);
    echo get_class($truckBuilder);
    var_dump($newVehicle === $truckBuilder);
}

testCanBuildTruck();

function testCanBuildCar()
{
    $carBuilder = new CarBuilder();
    $newVehicle = (new Director())->build($carBuilder);
}
