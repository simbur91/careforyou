<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="emailsecu", type="string", length=255)
     */
    private $emailsecu;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var  string
     *
     * @ORM\Column(name="birthdate", type="string", length=255)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="admin", type="boolean")
     */
    private $admin;

    /**
     * @var string
     *
     * @ORM\Column(name="langage", type="string", length=100)
     */
    private $langage;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10)
     */
    private $sexe;
  
    /**
     * @ORM\OneToOne(targetEntity="Coordonnees",mappedBy="users")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $coordonnees;
    /**
     * @ORM\OneToMany(targetEntity="Message",mappedBy="senderId")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $message;
    /**
     * @ORM\OneToMany(targetEntity="Message",mappedBy="recipientId")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $messagesend;

    /**
     * @var string
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->message = new \Doctrine\Common\Collections\ArrayCollection();
        $this->messagesend = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailsecu
     *
     * @param string $emailsecu
     *
     * @return Users
     */
    public function setEmailsecu($emailsecu)
    {
        $this->emailsecu = $emailsecu;

        return $this;
    }

    /**
     * Get emailsecu
     *
     * @return string
     */
    public function getEmailsecu()
    {
        return $this->emailsecu;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Users
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set birthdate
     *
     * @param string $birthdate
     *
     * @return Users
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     *
     * @return Users
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set langage
     *
     * @param string $langage
     *
     * @return Users
     */
    public function setLangage($langage)
    {
        $this->langage = $langage;

        return $this;
    }

    /**
     * Get langage
     *
     * @return string
     */
    public function getLangage()
    {
        return $this->langage;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Users
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set coordonnees
     *
     * @param \CF\CarBundle\Entity\Coordonnees $coordonnees
     *
     * @return Users
     */
    public function setCoordonnees(\CF\CarBundle\Entity\Coordonnees $coordonnees = null)
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    /**
     * Get coordonnees
     *
     * @return \CF\CarBundle\Entity\Coordonnees
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }

    /**
     * Add message
     *
     * @param \CF\CarBundle\Entity\Message $message
     *
     * @return Users
     */
    public function addMessage(\CF\CarBundle\Entity\Message $message)
    {
        $this->message[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \CF\CarBundle\Entity\Message $message
     */
    public function removeMessage(\CF\CarBundle\Entity\Message $message)
    {
        $this->message->removeElement($message);
    }

    /**
     * Get message
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Add messagesend
     *
     * @param \CF\CarBundle\Entity\Message $messagesend
     *
     * @return Users
     */
    public function addMessagesend(\CF\CarBundle\Entity\Message $messagesend)
    {
        $this->messagesend[] = $messagesend;

        return $this;
    }

    /**
     * Remove messagesend
     *
     * @param \CF\CarBundle\Entity\Message $messagesend
     */
    public function removeMessagesend(\CF\CarBundle\Entity\Message $messagesend)
    {
        $this->messagesend->removeElement($messagesend);
    }

    /**
     * Get messagesend
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessagesend()
    {
        return $this->messagesend;
    }
}
