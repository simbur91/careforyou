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
        $menu->addChild('Top Mensuel',array('route'=>''));
        $menu->addChild('Inscription',array('route'=>''));
        $menu->addChild('Connexion',array('route'=>''));
        return $menu;
    }
}