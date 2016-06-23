<?php

namespace CF\CarBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures\Fixtures;
use Hautelook\AliceBundle\Faker;
use Faker\Factory;

class CarFixtures extends DataFixtureLoader
{
    /**
     * {@inheritDoc}
     */
    protected function getFixtures()
    {
        return  array(
            __DIR__ . '/advice.yml',
        );
    }
    public  function uniqueId(){
        $faker = Factory::create();
        $values = array();
        for ($i=0; $i < 10; $i++) {
            $values []= $faker->unique()->randomDigit;
        }
    }
}