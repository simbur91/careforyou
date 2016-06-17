<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advice
 *
 * @ORM\Table(name="advice")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\AdviceRepository")
 */
class Advice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAdvice;

    /**
     *
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     *
     * @ORM\OneToOne(targetEntity="Driver")
     * @ORM\JoinColumn(name="id_driver", referencedColumnName="id")
     * @ORM\Column(name="id_driver", type="integer")
     */
    private $idDriver;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="evaluation", type="integer")
     */
    private $evaluation;


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
     * @return Advice
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
     * Set idDriver
     *
     * @param integer $idDriver
     *
     * @return Advice
     */
    public function setIdDriver($idDriver)
    {
        $this->idDriver = $idDriver;

        return $this;
    }

    /**
     * Get idDriver
     *
     * @return int
     */
    public function getIdDriver()
    {
        return $this->idDriver;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Advice
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
     * Set evaluation
     *
     * @param integer $evaluation
     *
     * @return Advice
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return int
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Get idAdvice
     *
     * @return integer
     */
    public function getIdAdvice()
    {
        return $this->idAdvice;
    }
}
