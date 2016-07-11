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
    private $id;

    /**
     *
     * @ORM\OneToOne(targetEntity="Users")
     *
     */
    private $User;

    /**
     *
     * @ORM\OneToOne(targetEntity="Driver")
     *
     */
    private $driver;

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
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * @return integer
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set user
     *
     * @param \CF\CarBundle\Entity\Users $user
     *
     * @return Advice
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
     * Set driver
     *
     * @param \CF\CarBundle\Entity\Driver $driver
     *
     * @return Advice
     */
    public function setDriver(\CF\CarBundle\Entity\Driver $driver = null)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Get driver
     *
     * @return \CF\CarBundle\Entity\Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }
}
