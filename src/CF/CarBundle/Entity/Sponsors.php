<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsors
 *
 * @ORM\Table(name="sponsors")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\SponsorsRepository")
 */
class Sponsors
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
     * @ORM\Column(name="lot", type="string", length=255)
     */
    private $lot;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Competition",mappedBy="sponsors")
     */
    private $competition;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->competition = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set lot
     *
     * @param string $lot
     *
     * @return Sponsors
     */
    public function setLot($lot)
    {
        $this->lot = $lot;

        return $this;
    }

    /**
     * Get lot
     *
     * @return string
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sponsors
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add competition
     *
     * @param \CF\CarBundle\Entity\Competition $competition
     *
     * @return Sponsors
     */
    public function addCompetition(\CF\CarBundle\Entity\Competition $competition)
    {
        $this->competition[] = $competition;

        return $this;
    }

    /**
     * Remove competition
     *
     * @param \CF\CarBundle\Entity\Competition $competition
     */
    public function removeCompetition(\CF\CarBundle\Entity\Competition $competition)
    {
        $this->competition->removeElement($competition);
    }

    /**
     * Get competition
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetition()
    {
        return $this->competition;
    }
}
