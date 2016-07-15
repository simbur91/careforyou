<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\ModeleRepository")
 */
class Modele
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
     * @ORM\Column(name="modele_name", type="string", length=255)
     */
    private $modeleName;

    /**
     * @ORM\ManyToOne(targetEntity="Marque",inversedBy="modele")
     */
    private $marque;

    /**
     * @ORM\OneToMany(targetEntity="Driver",mappedBy="modele")
     */
    private $driver;
    


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->driver = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set modeleName
     *
     * @param string $modeleName
     *
     * @return Modele
     */
    public function setModeleName($modeleName)
    {
        $this->modeleName = $modeleName;

        return $this;
    }

    /**
     * Get modeleName
     *
     * @return string
     */
    public function getModeleName()
    {
        return $this->modeleName;
    }

    /**
     * Set marque
     *
     * @param \CF\CarBundle\Entity\Marque $marque
     *
     * @return Modele
     */
    public function setMarque(\CF\CarBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \CF\CarBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Add driver
     *
     * @param \CF\CarBundle\Entity\Driver $driver
     *
     * @return Modele
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
}
