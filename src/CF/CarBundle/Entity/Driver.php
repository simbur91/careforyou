<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Driver
 *
 * @ORM\Table(name="driver")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\DriverRepository")
 */
class Driver
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
     *
     * @ORM\Column(name="place", type="integer")
     */
    private $place;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Modele",inversedBy="driver")
     * @ORM\JoinColumn(name="modele_id", referencedColumnName="id")
     * @ORM\Column(name="modele_id", type="integer")
     */
    private $modeleId;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @ORM\Column(name="user_id", type="integer")
     */


    private $UserId;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Marque",inversedBy="driver")
     * @ORM\JoinColumn(name="marque_id", referencedColumnName="id")
     * @ORM\Column(name="marque_id", type="integer")
     */


    private $IdMarque;

    /**
     * @var int
     *
     * @ORM\Column(name="rayon", type="integer")
     */
    private $rayon;

    /**
     * @var string
     *
     * @ORM\Column(name="color_car", type="string", length=255)
     */
    private $colorCar;
    /**
     *
     *
     * @ORM\OneToMany(targetEntity="Travel",mappedBy="driverId")
     */
    private $travel;
    /**
     * @var int
     *
     * @ORM\Column(name="note_moyenne", type="integer")
     */
    private $noteMoyenne;


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
     * Set place
     *
     * @param integer $place
     *
     * @return Driver
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return int
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set modeleId
     *
     * @param integer $modeleId
     *
     * @return Driver
     */
    public function setModeleId($modeleId)
    {
        $this->modeleId = $modeleId;

        return $this;
    }

    /**
     * Get modeleId
     *
     * @return int
     */
    public function getModeleId()
    {
        return $this->modeleId;
    }

    /**
     * Set marqueId
     *
     * @param integer $marqueId
     *
     * @return Driver
     */
    public function setMarqueId($marqueId)
    {
        $this->marqueId = $marqueId;

        return $this;
    }

    /**
     * Get marqueId
     *
     * @return int
     */
    public function getMarqueId()
    {
        return $this->marqueId;
    }

    /**
     * Set rayon
     *
     * @param integer $rayon
     *
     * @return Driver
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get rayon
     *
     * @return int
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set colorCar
     *
     * @param string $colorCar
     *
     * @return Driver
     */
    public function setColorCar($colorCar)
    {
        $this->colorCar = $colorCar;

        return $this;
    }

    /**
     * Get colorCar
     *
     * @return string
     */
    public function getColorCar()
    {
        return $this->colorCar;
    }

    /**
     * Set noteMoyenne
     *
     * @param integer $noteMoyenne
     *
     * @return Driver
     */
    public function setNoteMoyenne($noteMoyenne)
    {
        $this->noteMoyenne = $noteMoyenne;

        return $this;
    }

    /**
     * Get noteMoyenne
     *
     * @return int
     */
    public function getNoteMoyenne()
    {
        return $this->noteMoyenne;
    }

    /**
     * Set idMarque
     *
     * @param integer $idMarque
     *
     * @return Driver
     */
    public function setIdMarque($idMarque)
    {
        $this->IdMarque = $idMarque;

        return $this;
    }

    /**
     * Get idMarque
     *
     * @return integer
     */
    public function getIdMarque()
    {
        return $this->IdMarque;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Driver
     */
    public function setUserId($userId)
    {
        $this->UserId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    public function __construct()
    {
        $this->travel = new ArrayCollection();
    }

    /**
     * Add travel
     *
     * @param \CF\CarBundle\Entity\Travel $travel
     *
     * @return Driver
     */
    public function addTravel(\CF\CarBundle\Entity\Travel $travel)
    {
        $this->travel[] = $travel;

        return $this;
    }

    /**
     * Remove travel
     *
     * @param \CF\CarBundle\Entity\Travel $travel
     */
    public function removeTravel(\CF\CarBundle\Entity\Travel $travel)
    {
        $this->travel->removeElement($travel);
    }

    /**
     * Get travel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTravel()
    {
        return $this->travel;
    }
}
