<?php

namespace CF\CarBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;

class CarFixtures extends AbstractLoader
{
    /**
     * {@inheritdoc}
     */
    public function getFixtures()
    {
        return  array(
            __DIR__ . '/marque.yml',
        );
    }
    public function marque(){

       $genera=[
           'Abarth',
           'Alfa Romeo',
           'Aston Martin',
           'Audi',
           'Bentley',
           'BMW',
           'Chevrolet',
           'Citroen',
           'Dacia',
           'DS',
           'Ferrari',
           'Fiat',
           'Ford',
           'Honda',
           'Hyundai',
           'Infiniti',
           'Jaguar',
           'Jeep',
           'Kia',
           'Lada',
           'Lamborghini',
           'Lancia',
           'Land Rover',
           'Lexus',
           'Lotus',
           'Maserati',
           'Mazda',
           'Mclaren',
           'Mercedes-Benz',
           'Mini',
           'Mitsubishi',
           'Nissan',
           'Opel',
           'Peugeot',
           'Porsche',
           'Renault',
           'Rolls Royce'

       ];
    $key=array_rand($genera);
    $key=array_unique($key);
        return $genera[$key];

    }
}