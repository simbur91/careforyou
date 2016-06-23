<?php

namespace CF\CarBundle\Repository;

/**
 * TravelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TravelRepository extends \Doctrine\ORM\EntityRepository
{
    public function AllTravelByPrefAndDriver(){

        $qb=$this->createQueryBuilder('t')
            ->join('t.driverId','driver')
            ->join('driver.UserId','user')
            ->join('driver.preferencesId','preferences')
            ->addSelect('driver')
            ->addSelect('user')
            ->addSelect('preferences');

        return $qb->getQuery()->getResult();
    }
}
