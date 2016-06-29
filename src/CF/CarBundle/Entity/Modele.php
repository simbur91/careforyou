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
     * @ORM\ManyToOne(targetEntity="Driver",inversedBy="modeleId")
     *
     */
    private $driver;


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
     * Set driver
     *
     * @param \CF\CarBundle\Entity\Driver $driver
     *
     * @return Modele
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
