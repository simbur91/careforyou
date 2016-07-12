<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", uniqueConstraints={@ORM\UniqueConstraint(name="trajet_unique", columns={"trajet_id", "users_id"})}))
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\CommandeRepository")
 * 
 * 
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
     * @ORM\ManyToOne(targetEntity="Travel")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * 
     * 
     */
    private $trajet;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * 
     *
     */
    private $users;


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
        $this->trajet = $trajet;

        return $this;
    }

    /**
     * Get trajet
     *
     * @return \CF\CarBundle\Entity\Travel
     */
    public function getTrajet()
    {
        return $this->trajet;
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
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }
}
