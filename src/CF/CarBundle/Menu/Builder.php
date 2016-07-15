<?php

namespace CF\CarBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public  function mainMenu(FactoryInterface $factory,array $option){
        $menu=$factory->createItem('root');

        $menu->addChild('Home',array('route'=>'cf_car_homepage'));
        $menu->addChild('Trajet',array('route'=>'cf_car_travel'));
        $menu->addChild('Top Mensuel',array('route'=>'cf_car_alltravel'));
        $menu->addChild('Inscription',array('route'=>'cf_car_register'));
        $menu->addChild('Connexion',array('route'=>'cf_car_login'));
        return $menu;
    }
}