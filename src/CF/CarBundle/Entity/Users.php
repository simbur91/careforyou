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
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
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
     * @var bool
     * @ORM\OneToOne(targetEntity="Driver")
     * @ORM\Column(name="driver", type="boolean")
     */
    private $driver;


    /**
    * @ORM\OneToMany(targetEntity="Comments",mappedBy="user")
    */
    private  $comments;
    /**
     * @ORM\OneToMany(targetEntity="Commande",mappedBy="user")
     */
    private $commande;
    /**
     * @ORM\OneToOne(targetEntity="Coordonnees",mappedBy="users")
     */
    private $coordonnees;
    /**
     * @ORM\OneToMany(targetEntity="Message",mappedBy="senderId")
     */
    private $message;
    /**
     * @ORM\OneToMany(targetEntity="Message",mappedBy="recipientId")
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
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
        $this->message = new \Doctrine\Common\Collections\ArrayCollection();
        $this->messagesend = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @param \DateTime $birthdate
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
     * @return \DateTime
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
     * @return bool
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
     * Set driver
     *
     * @param boolean $driver
     *
     * @return Users
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Get driver
     *
     * @return bool
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Users
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Users
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Users
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Add comment
     *
     * @param \CF\CarBundle\Entity\Comments $comment
     *
     * @return Users
     */
    public function addComment(Comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \CF\CarBundle\Entity\Comments $comment
     */
    public function removeComment(Comments $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add commande
     *
     * @param \CF\CarBundle\Entity\Commande $commande
     *
     * @return Users
     */
    public function addCommande(Commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \CF\CarBundle\Entity\Commande $commande
     */
    public function removeCommande(Commande $commande)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set coordonnees
     *
     * @param \CF\CarBundle\Entity\Coordonnees $coordonnees
     *
     * @return Users
     */
    public function setCoordonnees(Coordonnees $coordonnees = null)
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
    public function addMessage(Message $message)
    {
        $this->message[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \CF\CarBundle\Entity\Message $message
     */
    public function removeMessage(Message $message)
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
    public function addMessagesend(Message $messagesend)
    {
        $this->messagesend[] = $messagesend;

        return $this;
    }

    /**
     * Remove messagesend
     *
     * @param \CF\CarBundle\Entity\Message $messagesend
     */
    public function removeMessagesend(Message $messagesend)
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
