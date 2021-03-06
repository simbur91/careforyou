<?php

namespace CF\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Info_Banq
 *
 * @ORM\Table(name="info__banq")
 * @ORM\Entity(repositoryClass="CF\CarBundle\Repository\Info_BanqRepository")
 */
class Info_Banq
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
     * @ORM\Column(name="iban", type="string", length=255)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="bic", type="string", length=255)
     */
    private $bic;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=255)
     */
    private $institution;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;


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
     * Set iban
     *
     * @param string $iban
     *
     * @return Info_Banq
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Info_Banq
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
     * Set bic
     *
     * @param string $bic
     *
     * @return Info_Banq
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Get bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set institution
     *
     * @param string $institution
     *
     * @return Info_Banq
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Info_Banq
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
