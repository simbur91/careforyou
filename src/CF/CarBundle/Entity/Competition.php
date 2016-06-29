<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\CompetitionRepository")
 */
class Competition
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
     *
     * @ORM\OneToOne(targetEntity="Sponsors",inversedBy="competition")
     */
    private $sponsors;


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
     * @return Competition
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
     * Set sponsors
     *
     * @param \CF\CarBundle\Entity\Sponsors $sponsors
     *
     * @return Competition
     */
    public function setSponsors(\CF\CarBundle\Entity\Sponsors $sponsors = null)
    {
        $this->sponsors = $sponsors;

        return $this;
    }

    /**
     * Get sponsors
     *
     * @return \CF\CarBundle\Entity\Sponsors
     */
    public function getSponsors()
    {
        return $this->sponsors;
    }
}
