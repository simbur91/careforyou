<?php

namespace CF\CarBundle\Entity;

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
     * @var int
     * @ORM\ManyToOne(targetEntity="Driver")
     * @ORM\JoinColumn(name="driver_id", referencedColumnName="id")
     * @ORM\Column(name="driver_id", type="integer")
     */
    private $driverId;

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
     * @var int
     * @ORM\ManyToMany(targetEntity="Users")
     * @ORM\Column(name="users_id", type="integer")
     */
    private $usersId;
    /**

     * @ORM\OneToMany(targetEntity="Comments",mappedBy="travel")

     */
    private $comments;

    /**

     * @ORM\OneToOne(targetEntity="Commande")

     */
    private $commande;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set driverId
     *
     * @param integer $driverId
     *
     * @return Travel
     */
    public function setDriverId($driverId)
    {
        $this->driverId = $driverId;

        return $this;
    }

    /**
     * Get driverId
     *
     * @return int
     */
    public function getDriverId()
    {
        return $this->driverId;
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
     * @return int
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
     * @return int
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Travel
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get usersId
     *
     * @return int
     */
    public function getUsersId()
    {
        return $this->usersId;
    }
    /**
     * @var integer
     */
    private $idTrajet;

    /**
     * @var \CF\CarBundle\Entity\Users
     */
    private $users;

    /**
     * @var \CF\CarBundle\Entity\Driver
     */
    private $idDriver;


    /**
     * Get idTrajet
     *
     * @return integer
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
    }

    /**
     * Set users
     *
     * @param \CF\CarBundle\Entity\Users $users
     *
     * @return Travel
     */
    public function setUsers(\CF\CarBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set idDriver
     *
     * @param \CF\CarBundle\Entity\Driver $idDriver
     *
     * @return Travel
     */
    public function setIdDriver(\CF\CarBundle\Entity\Driver $idDriver = null)
    {
        $this->idDriver = $idDriver;

        return $this;
    }

    /**
     * Get idDriver
     *
     * @return \CF\CarBundle\Entity\Driver
     */
    public function getIdDriver()
    {
        return $this->idDriver;
    }
    public function __construct()
    {
        $this->usersId = new ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \CF\CarBundle\Entity\Comments $comment
     *
     * @return Travel
     */
    public function addComment(\CF\CarBundle\Entity\Comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \CF\CarBundle\Entity\Comments $comment
     */
    public function removeComment(\CF\CarBundle\Entity\Comments $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set commande
     *
     * @param \CF\CarBundle\Entity\Commande $commande
     *
     * @return Travel
     */
    public function setCommande(\CF\CarBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \CF\CarBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
