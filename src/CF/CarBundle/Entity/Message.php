<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\MessageRepository")
 */
class Message
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_message", type="datetime")
     */
    private $dateMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Users",inversedBy="message")
     * @ORM\JoinColumn(name="recipient_id", referencedColumnName="id")
     * @ORM\Column(name="recipient_id", type="integer")
     */
    private $recipientId;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Users",inversedBy="messagesend")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     * @ORM\Column(name="sender_id", type="integer")
     */
    private $senderId;


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
     * Set dateMessage
     *
     * @param \DateTime $dateMessage
     *
     * @return Message
     */
    public function setDateMessage($dateMessage)
    {
        $this->dateMessage = $dateMessage;

        return $this;
    }

    /**
     * Get dateMessage
     *
     * @return \DateTime
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Message
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set recipientId
     *
     * @param integer $recipientId
     *
     * @return Message
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * Get recipientId
     *
     * @return int
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * Set senderId
     *
     * @param integer $senderId
     *
     * @return Message
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get senderId
     *
     * @return int
     */
    public function getSenderId()
    {
        return $this->senderId;
    }
    /**
     * @var string
     */
    private $subject;

    /**
     * @var integer
     */
    private $idMessage;

    /**
     * @var \CF\CarBundle\Entity\Users
     */
    private $idSender;

    /**
     * @var \CF\CarBundle\Entity\Users
     */
    private $idRecipient;


    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Get idMessage
     *
     * @return integer
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set idSender
     *
     * @param \CF\CarBundle\Entity\Users $idSender
     *
     * @return Message
     */
    public function setIdSender(\CF\CarBundle\Entity\Users $idSender = null)
    {
        $this->idSender = $idSender;

        return $this;
    }

    /**
     * Get idSender
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getIdSender()
    {
        return $this->idSender;
    }

    /**
     * Set idRecipient
     *
     * @param \CF\CarBundle\Entity\Users $idRecipient
     *
     * @return Message
     */
    public function setIdRecipient(\CF\CarBundle\Entity\Users $idRecipient = null)
    {
        $this->idRecipient = $idRecipient;

        return $this;
    }

    /**
     * Get idRecipient
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getIdRecipient()
    {
        return $this->idRecipient;
    }
}
