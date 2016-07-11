<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table(name="marque")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\MarqueRepository")
 */
class Marque
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
  
    /**
     * @ORM\OneToMany(targetEntity="Modele", mappedBy="marque")
     */
    private $modele;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->driver = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modele = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Marque
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add driver
     *
     * @param \CF\CarBundle\Entity\Driver $driver
     *
     * @return Marque
     */
    public function addDriver(\CF\CarBundle\Entity\Driver $driver)
    {
        $this->driver[] = $driver;

        return $this;
    }

    /**
     * Remove driver
     *
     * @param \CF\CarBundle\Entity\Driver $driver
     */
    public function removeDriver(\CF\CarBundle\Entity\Driver $driver)
    {
        $this->driver->removeElement($driver);
    }

    /**
     * Get driver
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Add modele
     *
     * @param \CF\CarBundle\Entity\Modele $modele
     *
     * @return Marque
     */
    public function addModele(\CF\CarBundle\Entity\Modele $modele)
    {
        $this->modele[] = $modele;

        return $this;
    }

    /**
     * Remove modele
     *
     * @param \CF\CarBundle\Entity\Modele $modele
     */
    public function removeModele(\CF\CarBundle\Entity\Modele $modele)
    {
        $this->modele->removeElement($modele);
    }

    /**
     * Get modele
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModele()
    {
        return $this->modele;
    }
}
