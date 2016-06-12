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
     * @var int
     * @ORM\ManyToOne(targetEntity="Marque",inversedBy="modele")
     * @ORM\JoinColumn(name="marque_id", referencedColumnName="id")
     * @ORM\Column(name="marque_id", type="integer")
     */
    private $marqueId;
    /**
* @ORM\ManyToOne(targetEntity="Driver",inversedBy="modeleId")
     *
     */
    private  $driver;


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
     * Set marqueId
     *
     * @param integer $marqueId
     *
     * @return Modele
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
     * @var integer
     */
    private $idMarque;


    /**
     * Set idMarque
     *
     * @param integer $idMarque
     *
     * @return Modele
     */
    public function setIdMarque($idMarque)
    {
        $this->idMarque = $idMarque;

        return $this;
    }

    /**
     * Get idMarque
     *
     * @return integer
     */
    public function getIdMarque()
    {
        return $this->idMarque;
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
