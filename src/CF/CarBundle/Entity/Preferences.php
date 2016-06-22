<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preferences
 *
 * @ORM\Table(name="preferences")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\PreferencesRepository")
 */
class Preferences
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
     * @ORM\OneToMany(targetEntity="Driver", mappedBy="preferencesId")
     * @ORM\Column(name="driver_id", type="integer")
     */
    private $driver;

    /**
     * @var bool
     *
     * @ORM\Column(name="animal", type="boolean")
     */
    private $animal;

    /**
     * @var bool
     *
     * @ORM\Column(name="smoker", type="boolean")
     */
    private $smoker;

    /**
     * @var bool
     *
     * @ORM\Column(name="talker", type="boolean")
     */
    private $talker;

    /**
     * @var string
     *
     * @ORM\Column(name="musique", type="string", length=255)
     */
    private $musique;

    /**
     * @var bool
     *
     * @ORM\Column(name="food", type="boolean")
     */
    private $food;

    /**
     * @var string
     *
     * @ORM\Column(name="rayon", type="string", length=20)
     */
    private $rayon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_aller", type="datetime")
     */
    private $horaireAller;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_retour", type="datetime")
     */
    private $horaireRetour;

    /**
     * @var int
     *
     * @ORM\Column(name="confort", type="integer")
     */
    private $confort;


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
     * Set animal
     *
     * @param boolean $animal
     *
     * @return Preferences
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return bool
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set smoker
     *
     * @param boolean $smoker
     *
     * @return Preferences
     */
    public function setSmoker($smoker)
    {
        $this->smoker = $smoker;

        return $this;
    }

    /**
     * Get smoker
     *
     * @return bool
     */
    public function getSmoker()
    {
        return $this->smoker;
    }

    /**
     * Set talker
     *
     * @param boolean $talker
     *
     * @return Preferences
     */
    public function setTalker($talker)
    {
        $this->talker = $talker;

        return $this;
    }

    /**
     * Get talker
     *
     * @return bool
     */
    public function getTalker()
    {
        return $this->talker;
    }

    /**
     * Set musique
     *
     * @param string $musique
     *
     * @return Preferences
     */
    public function setMusique($musique)
    {
        $this->musique = $musique;

        return $this;
    }

    /**
     * Get musique
     *
     * @return string
     */
    public function getMusique()
    {
        return $this->musique;
    }

    /**
     * Set food
     *
     * @param boolean $food
     *
     * @return Preferences
     */
    public function setFood($food)
    {
        $this->food = $food;

        return $this;
    }

    /**
     * Get food
     *
     * @return bool
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Set rayon
     *
     * @param string $rayon
     *
     * @return Preferences
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get rayon
     *
     * @return string
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set horaireAller
     *
     * @param \DateTime $horaireAller
     *
     * @return Preferences
     */
    public function setHoraireAller($horaireAller)
    {
        $this->horaireAller = $horaireAller;

        return $this;
    }

    /**
     * Get horaireAller
     *
     * @return \DateTime
     */
    public function getHoraireAller()
    {
        return $this->horaireAller;
    }

    /**
     * Set horaireRetour
     *
     * @param \DateTime $horaireRetour
     *
     * @return Preferences
     */
    public function setHoraireRetour($horaireRetour)
    {
        $this->horaireRetour = $horaireRetour;

        return $this;
    }

    /**
     * Get horaireRetour
     *
     * @return \DateTime
     */
    public function getHoraireRetour()
    {
        return $this->horaireRetour;
    }

    /**
     * Set confort
     *
     * @param integer $confort
     *
     * @return Preferences
     */
    public function setConfort($confort)
    {
        $this->confort = $confort;

        return $this;
    }

    /**
     * Get confort
     *
     * @return int
     */
    public function getConfort()
    {
        return $this->confort;
    }
    /**
     * @var integer
     */
    private $idPreferences;

    /**
     * @var \CF\CarBundle\Entity\Travel
     */
    private $idTravel;


    /**
     * Get idPreferences
     *
     * @return integer
     */
    public function getIdPreferences()
    {
        return $this->idPreferences;
    }

    /**
     * Set idTravel
     *
     * @param \CF\CarBundle\Entity\Travel $idTravel
     *
     * @return Preferences
     */
    public function setIdTravel(\CF\CarBundle\Entity\Travel $idTravel = null)
    {
        $this->idTravel = $idTravel;

        return $this;
    }

    /**
     * Get idTravel
     *
     * @return \CF\CarBundle\Entity\Travel
     */
    public function getIdTravel()
    {
        return $this->idTravel;
    }



    /**
     * Set driver
     *
     * @param integer $driver
     *
     * @return Preferences
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Get driver
     *
     * @return integer
     */
    public function getDriver()
    {
        return $this->driver;
    }
}
