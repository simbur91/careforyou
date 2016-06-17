<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @ORM\ManyToOne(targetEntity="Users",inversedBy="comments")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * @ORM\Column(name="id_user", type="integer")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Travel",inversedBy="comments")
     * @ORM\JoinColumn(name="id_trajet", referencedColumnName="id")
     */
    private $travel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="datetime", nullable=true)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Comments
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idTravel
     *
     * @param integer $idTravel
     *
     * @return Comments
     */
    public function setIdTravel($idTravel)
    {
        $this->idTravel = $idTravel;

        return $this;
    }

    /**
     * Get idTravel
     *
     * @return int
     */
    public function getIdTravel()
    {
        return $this->idTravel;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Comments
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comments
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
     * @var string
     */
    private $commentsContent;

    /**
     * @var integer
     */
    private $idComment;

    /**
     * @var \CF\CarBundle\Entity\Users
     */
    private $idUsers;


    /**
     * Set commentsContent
     *
     * @param string $commentsContent
     *
     * @return Comments
     */
    public function setCommentsContent($commentsContent)
    {
        $this->commentsContent = $commentsContent;

        return $this;
    }

    /**
     * Get commentsContent
     *
     * @return string
     */
    public function getCommentsContent()
    {
        return $this->commentsContent;
    }

    /**
     * Get idComment
     *
     * @return integer
     */
    public function getIdComment()
    {
        return $this->idComment;
    }

    /**
     * Set idUsers
     *
     * @param \CF\CarBundle\Entity\Users $idUsers
     *
     * @return Comments
     */
    public function setIdUsers(\CF\CarBundle\Entity\Users $idUsers = null)
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    /**
     * Get idUsers
     *
     * @return \CF\CarBundle\Entity\Users
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Comments
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set travel
     *
     * @param integer $travel
     *
     * @return Comments
     */
    public function setTravel($travel)
    {
        $this->travel = $travel;

        return $this;
    }

    /**
     * Get travel
     *
     * @return integer
     */
    public function getTravel()
    {
        return $this->travel;
    }
}
