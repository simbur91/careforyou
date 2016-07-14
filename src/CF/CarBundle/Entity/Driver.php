<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Driver
 *
 * @ORM\Table(name="driver")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\DriverRepository")
 */
class Driver
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
     *
     * @ORM\Column(name="place", type="integer")
     */
    private $place;

    /**

     * @ORM\ManyToOne(targetEntity="Modele",inversedBy="driver")
     * @ORM\JoinColumn(name="modele_id", referencedColumnName="id")

     */
    private $modele;

    /**
     *
     *
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *
     */


    private $User;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Marque",inversedBy="driver")
     *
     */


    private $Marque;
    

    /**
     * @var string
     *
     * @ORM\Column(name="color_car", type="string", length=255)
     */
    private $colorCar;
    
    /**
     * @var int
     *
     * @ORM\Column(name="note_moyenne", type="integer")
     */
    private $noteMoyenne;
    
    private  $preferences;



    

    

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
     * Set place
     *
     * @param integer $place
     *
     * @return Driver
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set colorCar
     *
     * @param string $colorCar
     *
     * @return Driver
     */
    public function setColorCar($colorCar)
    {
        $this->colorCar = $colorCar;

        return $this;
    }

    /**
     * Get colorCar
     *
     * @return string
     */
    public function getColorCar()
    {
        return $this->colorCar;
    }

    /**
     * Set noteMoyenne
     *
     * @param integer $noteMoyenne
     *
     * @return Driver
     */
    public function setNoteMoyenne($noteMoyenne)
    {
        $this->noteMoyenne = $noteMoyenne;

        return $this;
    }

    /**
     * Get noteMoyenne
     *
     * @return integer
     */
    public function getNoteMoyenne()
    {
        return $this->noteMoyenne;
    }

    /**
     * Set modele
     *
     * @param \CF\CarBundle\Entity\Modele $modele
     *
     * @return Driver
     */
    public function setModele(\CF\CarBundle\Entity\Modele $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \CF\CarBundle\Entity\Modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set user
     *
     * @param \CF\CarBundle\Entity\Users $user
     *
     * @return Driver
     */
    public function setUser(\CF\CarBundle\Entity\Users $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set marque
     *
     * @param \CF\CarBundle\Entity\Marque $marque
     *
     * @return Driver
     */
    public function setMarque(\CF\CarBundle\Entity\Marque $marque = null)
    {
        $this->Marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \CF\CarBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->Marque;
    }
}
