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

     * @ORM\ManyToOne(targetEntity="Modele",inversedBy="driver")
     * @ORM\JoinColumn(name="modele_id", referencedColumnName="id")

     */
    private $modele;

    /**
     *
     *
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *
     */


    private $User;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Marque",inversedBy="driver")
     *
     */


    private $Marque;

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
     *
     * @ORM\OneToOne(targetEntity="Preferences",inversedBy="driver")
     *
     */
    private $preferences;
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
     * Set preferences
     *
     * @param integer $preferences
     *
     * @return Driver
     */
    public function setpreferences($preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Get preferences
     *
     * @return int
     */
    public function getpreferences()
    {
        return $this->preferences;
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



    /**
     * Set modele
     *
     * @param \CF\CarBundle\Entity\Modele $modele
     *
     * @return Driver
     */
    public function setModele(\CF\CarBundle\Entity\Modele $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \CF\CarBundle\Entity\Modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set user
     *
     * @param \CF\CarBundle\Entity\Users $user
     *
     * @return Driver
     */
    public function setUser(\CF\CarBundle\Entity\Users $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set marque
     *
     * @param \CF\CarBundle\Entity\Marque $marque
     *
     * @return Driver
     */
    public function setMarque(\CF\CarBundle\Entity\Marque $marque = null)
    {
        $this->Marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \CF\CarBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->Marque;
    }
}
