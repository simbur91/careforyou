<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordonnees
 *
 * @ORM\Table(name="coordonnees")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\CoordonneesRepository")
 */
class Coordonnees
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

     * @ORM\OneToMany(targetEntity="Users",mappedBy="coordonnees")


     */
    private $users;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_street", type="string", length=255)
     */
    private $adressStreet;

    /**
     * @var int
     *
     * @ORM\Column(name="adress_num", type="integer")
     */
    private $adressNum;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_box", type="string", length=255, nullable=true)
     */
    private $adressBox;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_zip", type="string", length=20)
     */
    private $adressZip;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_country", type="string", length=255)
     */
    private $adressCountry;


   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set adressStreet
     *
     * @param string $adressStreet
     *
     * @return Coordonnees
     */
    public function setAdressStreet($adressStreet)
    {
        $this->adressStreet = $adressStreet;

        return $this;
    }

    /**
     * Get adressStreet
     *
     * @return string
     */
    public function getAdressStreet()
    {
        return $this->adressStreet;
    }

    /**
     * Set adressNum
     *
     * @param integer $adressNum
     *
     * @return Coordonnees
     */
    public function setAdressNum($adressNum)
    {
        $this->adressNum = $adressNum;

        return $this;
    }

    /**
     * Get adressNum
     *
     * @return integer
     */
    public function getAdressNum()
    {
        return $this->adressNum;
    }

    /**
     * Set adressBox
     *
     * @param string $adressBox
     *
     * @return Coordonnees
     */
    public function setAdressBox($adressBox)
    {
        $this->adressBox = $adressBox;

        return $this;
    }

    /**
     * Get adressBox
     *
     * @return string
     */
    public function getAdressBox()
    {
        return $this->adressBox;
    }

    /**
     * Set adressZip
     *
     * @param string $adressZip
     *
     * @return Coordonnees
     */
    public function setAdressZip($adressZip)
    {
        $this->adressZip = $adressZip;

        return $this;
    }

    /**
     * Get adressZip
     *
     * @return string
     */
    public function getAdressZip()
    {
        return $this->adressZip;
    }

    /**
     * Set adressCountry
     *
     * @param string $adressCountry
     *
     * @return Coordonnees
     */
    public function setAdressCountry($adressCountry)
    {
        $this->adressCountry = $adressCountry;

        return $this;
    }

    /**
     * Get adressCountry
     *
     * @return string
     */
    public function getAdressCountry()
    {
        return $this->adressCountry;
    }

    /**
     * Add user
     *
     * @param \CF\CarBundle\Entity\Users $user
     *
     * @return Coordonnees
     */
    public function addUser(\CF\CarBundle\Entity\Users $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \CF\CarBundle\Entity\Users $user
     */
    public function removeUser(\CF\CarBundle\Entity\Users $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
