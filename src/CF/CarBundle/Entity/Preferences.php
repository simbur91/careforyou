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
     *
     * @ORM\OneToOne(targetEntity="Driver",inversedBy="preferences")
     *
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
     * @var string
     *
     * @ORM\Column(name="horaire_aller", type="string", length=200)
     */
    private $horaireAller;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire_retour", type="string", length=200)
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
     * @return integer
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
     * @return boolean
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
     * @return boolean
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
     * @return boolean
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
     * @return boolean
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
     * @return integer
     */
    public function getConfort()
    {
        return $this->confort;
    }

    /**
     * Set driver
     *
     * @param \CF\CarBundle\Entity\Driver $driver
     *
     * @return Preferences
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
}
