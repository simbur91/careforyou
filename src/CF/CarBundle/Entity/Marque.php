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
     * @ORM\Column(name="marque_name", type="string", length=255)
     */
    private $marqueName;
    /**
     * @ORM\OneToMany(targetEntity="Driver", mappedBy="IdMarque")
     */
    private $driver;
    /**
     * @ORM\OneToMany(targetEntity="Modele", mappedBy="IdMarque")
     */
    private $modele;
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
     * Set marqueName
     *
     * @param string $marqueName
     *
     * @return Marque
     */
    public function setMarqueName($marqueName)
    {
        $this->marqueName = $marqueName;

        return $this;
    }

    /**
     * Get marqueName
     *
     * @return string
     */
    public function getMarqueName()
    {
        return $this->marqueName;
    }
    public function __construct()
    {
        $this->modele = new ArrayCollection();
        $this->driver = new ArrayCollection();
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
