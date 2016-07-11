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
     * @ORM\OneToOne(targetEntity="Travel")
     */
    private $Trajet;

    /**
     *
     * @ORM\OneToOne(targetEntity="Users")
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
     * Set trajet
     *
     * @param \CF\CarBundle\Entity\Travel $trajet
     *
     * @return Commande
     */
    public function setTrajet(\CF\CarBundle\Entity\Travel $trajet = null)
    {
        $this->Trajet = $trajet;

        return $this;
    }

    /**
     * Get trajet
     *
     * @return \CF\CarBundle\Entity\Travel
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
