<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerHistory
 *
 * @ORM\Table(name="player_history")
 * @ORM\Entity
 */
class PlayerHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="account_uid", type="string", length=32, nullable=false)
     */
    private $accountUid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="died_at", type="datetime", nullable=false)
     */
    private $diedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     *
     * @ORM\Column(name="position_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionX;

    /**
     * @var float
     *
     * @ORM\Column(name="position_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionY;

    /**
     * @var float
     *
     * @ORM\Column(name="position_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionZ;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set accountUid
     *
     * @param string $accountUid
     *
     * @return PlayerHistory
     */
    public function setAccountUid($accountUid)
    {
        $this->accountUid = $accountUid;

        return $this;
    }

    /**
     * Get accountUid
     *
     * @return string
     */
    public function getAccountUid()
    {
        return $this->accountUid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PlayerHistory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set diedAt
     *
     * @param \DateTime $diedAt
     *
     * @return PlayerHistory
     */
    public function setDiedAt($diedAt)
    {
        $this->diedAt = $diedAt;

        return $this;
    }

    /**
     * Get diedAt
     *
     * @return \DateTime
     */
    public function getDiedAt()
    {
        return $this->diedAt;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return PlayerHistory
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get positionX
     *
     * @return float
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set positionY
     *
     * @param float $positionY
     *
     * @return PlayerHistory
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }

    /**
     * Get positionY
     *
     * @return float
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set positionZ
     *
     * @param float $positionZ
     *
     * @return PlayerHistory
     */
    public function setPositionZ($positionZ)
    {
        $this->positionZ = $positionZ;

        return $this;
    }

    /**
     * Get positionZ
     *
     * @return float
     */
    public function getPositionZ()
    {
        return $this->positionZ;
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
}
