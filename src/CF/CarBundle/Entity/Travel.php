<?php

namespace CF\CarBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Travel
 *
 * @ORM\Table(name="travel")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\TravelRepository")
 */
class Travel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Driver")
     * @ORM\JoinColumn(onDelete="CASCADE")
     *
     */
    private $driver;

    /**
     * @var string
     *
     * @ORM\Column(name="city_departure", type="string", length=255)
     */
    private $cityDeparture;

    /**
     * @var string
     *
     * @ORM\Column(name="city_finish", type="string", length=255)
     */
    private $cityFinish;

    /**
     * @var int
     *
     * @ORM\Column(name="place_free", type="integer")
     */
    private $placeFree;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="itinary", type="string", length=255)
     */
    private $itinary;

    /**
     * @ORM\ManyToMany(targetEntity="Users")
     */
    private $users;
    /**
     * @ORM\ManyToOne(targetEntity="Preferences",inversedBy="travel")
     */
    private  $preferences;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cityDeparture
     *
     * @param string $cityDeparture
     *
     * @return Travel
     */
    public function setCityDeparture($cityDeparture)
    {
        $this->cityDeparture = $cityDeparture;

        return $this;
    }

    /**
     * Get cityDeparture
     *
     * @return string
     */
    public function getCityDeparture()
    {
        return $this->cityDeparture;
    }

    /**
     * Set cityFinish
     *
     * @param string $cityFinish
     *
     * @return Travel
     */
    public function setCityFinish($cityFinish)
    {
        $this->cityFinish = $cityFinish;

        return $this;
    }

    /**
     * Get cityFinish
     *
     * @return string
     */
    public function getCityFinish()
    {
        return $this->cityFinish;
    }

    /**
     * Set placeFree
     *
     * @param integer $placeFree
     *
     * @return Travel
     */
    public function setPlaceFree($placeFree)
    {
        $this->placeFree = $placeFree;

        return $this;
    }

    /**
     * Get placeFree
     *
     * @return integer
     */
    public function getPlaceFree()
    {
        return $this->placeFree;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Travel
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     *
     * @return Travel
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set itinary
     *
     * @param string $itinary
     *
     * @return Travel
     */
    public function setItinary($itinary)
    {
        $this->itinary = $itinary;

        return $this;
    }

    /**
     * Get itinary
     *
     * @return string
     */
    public function getItinary()
    {
        return $this->itinary;
    }

    /**
     * Set driver
     *
     * @param \CF\CarBundle\Entity\Driver $driver
     *
     * @return Travel
     */
    public function setDriver(\CF\CarBundle\Entity\Driver $driver = null)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Get driver
     *
     * @return \CF\CarBundle\Entity\Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Add user
     *
     * @param \CF\CarBundle\Entity\Users $user
     *
     * @return Travel
     */
    public function addUser(\CF\CarBundle\Entity\Users $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \CF\CarBundle\Entity\Users $user
     */
    public function removeUser(\CF\CarBundle\Entity\Users $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set preferences
     *
     * @param \CF\CarBundle\Entity\Preferences $preferences
     *
     * @return Travel
     */
    public function setPreferences(\CF\CarBundle\Entity\Preferences $preferences = null)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Get preferences
     *
     * @return \CF\CarBundle\Entity\Preferences
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
}
