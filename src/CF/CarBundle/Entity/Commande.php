<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\OneToMany(targetEntity="Travel",mappedBy="commande")
     */
    private $Trajet;

    /**
     *
     * @ORM\OneToOne(targetEntity="Users",inversedBy="commande")
     *
     */
    private $Users;
    /**
     * @var string
     *
     * @ORM\Column(name="validation", type="string", length=100)
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=100)
     */
    private $statut;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Trajet = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set validation
     *
     * @param string $validation
     *
     * @return Commande
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return string
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Commande
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Add trajet
     *
     * @param \CF\CarBundle\Entity\Travel $trajet
     *
     * @return Commande
     */
    public function addTrajet(\CF\CarBundle\Entity\Travel $trajet)
    {
        $this->Trajet[] = $trajet;

        return $this;
    }

    /**
     * Remove trajet
     *
     * @param \CF\CarBundle\Entity\Travel $trajet
     */
    public function removeTrajet(\CF\CarBundle\Entity\Travel $trajet)
    {
        $this->Trajet->removeElement($trajet);
    }

    /**
     * Get trajet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrajet()
    {
        return $this->Trajet;
    }

    /**
     * Set users
     *
     * @param \CF\CarBundle\Entity\Users $users
     *
     * @return Commande
     */
    public function setUsers(\CF\CarBundle\Entity\Users $users = null)
    {
        $this->Users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->Users;
    }
}
