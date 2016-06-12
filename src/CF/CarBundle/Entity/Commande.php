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
     * @var int
     * @ORM\OneToMany(targetEntity="Travel",mappedBy="commande")
     * @ORM\JoinColumn(name="id_trajet", referencedColumnName="id")
     * @ORM\Column(name="id_trajet", type="integer")
     */
    private $Trajet;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="Users",inversedBy="commande")
     * @ORM\JoinColumn(name="id_users", referencedColumnName="id")
     * @ORM\Column(name="id_users", type="integer")
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTrajet
     *
     * @param integer $idTrajet
     *
     * @return Commande
     */
    public function setIdTrajet($idTrajet)
    {
        $this->idTrajet = $idTrajet;

        return $this;
    }

    /**
     * Get idTrajet
     *
     * @return int
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
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
     * @var integer
     */
    private $idCommande;


    /**
     * Get idCommande
     *
     * @return integer
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set trajet
     *
     * @param integer $trajet
     *
     * @return Commande
     */
    public function setTrajet($trajet)
    {
        $this->Trajet = $trajet;

        return $this;
    }

    /**
     * Get trajet
     *
     * @return integer
     */
    public function getTrajet()
    {
        return $this->Trajet;
    }

    /**
     * Set users
     *
     * @param integer $users
     *
     * @return Commande
     */
    public function setUsers($users)
    {
        $this->Users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return integer
     */
    public function getUsers()
    {
        return $this->Users;
    }
}
