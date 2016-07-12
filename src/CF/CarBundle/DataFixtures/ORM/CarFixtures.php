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
            __DIR__ . '/users.yml',
            __DIR__ . '/marque.yml',
            __DIR__ . '/modele.yml',
            __DIR__ . '/drivers.yml',
            __DIR__ . '/travel.yml',
            __DIR__ . '/comments.yml',
            __DIR__ . '/commande.yml',
            __DIR__ . '/competition.yml',
            __DIR__ . '/coordonnees.yml',
            __DIR__ . '/info_banq.yml',
            __DIR__ . '/message.yml',
            __DIR__ . '/preferences.yml',
            __DIR__ . '/sponsors.yml',
            
        );
    }
    public function statut(){

       $genera=[
            'Payé',
           'En attente de payement'

       ];
    $key=array_rand($genera);
        return $genera[$key];

    }
}