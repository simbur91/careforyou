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
     *
     * @ORM\Column(name="competition_id", type="integer")
     */
    private $competition;


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
     * Set competitionId
     *
     * @param integer $competitionId
     *
     * @return Sponsors
     */
    public function setCompetitionId($competitionId)
    {
        $this->competitionId = $competitionId;

        return $this;
    }

    /**
     * Get competitionId
     *
     * @return int
     */
    public function getCompetitionId()
    {
        return $this->competitionId;
    }
    /**
     * @var integer
     */
    private $idSponsors;

    /**
     * @var \CF\CarBundle\Entity\Competition
     */
    private $idCompetition;


    /**
     * Get idSponsors
     *
     * @return integer
     */
    public function getIdSponsors()
    {
        return $this->idSponsors;
    }

    /**
     * Set idCompetition
     *
     * @param \CF\CarBundle\Entity\Competition $idCompetition
     *
     * @return Sponsors
     */
    public function setIdCompetition(\CF\CarBundle\Entity\Competition $idCompetition = null)
    {
        $this->idCompetition = $idCompetition;

        return $this;
    }

    /**
     * Get idCompetition
     *
     * @return \CF\CarBundle\Entity\Competition
     */
    public function getIdCompetition()
    {
        return $this->idCompetition;
    }

    /**
     * Set competition
     *
     * @param integer $competition
     *
     * @return Sponsors
     */
    public function setCompetition($competition)
    {
        $this->competition = $competition;

        return $this;
    }

    /**
     * Get competition
     *
     * @return integer
     */
    public function getCompetition()
    {
        return $this->competition;
    }
}
