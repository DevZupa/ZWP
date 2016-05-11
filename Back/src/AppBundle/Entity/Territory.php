<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Territory
 *
 * @ORM\Table(name="territory", indexes={@ORM\Index(name="owner_uid", columns={"owner_uid"}), @ORM\Index(name="flag_stolen_by_uid", columns={"flag_stolen_by_uid"})})
 * @ORM\Entity
 */
class Territory
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

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
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=false)
     */
    private $radius;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="flag_texture", type="string", length=255, nullable=false)
     */
    private $flagTexture;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag_stolen", type="boolean", nullable=false)
     */
    private $flagStolen = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="flag_stolen_at", type="datetime", nullable=true)
     */
    private $flagStolenAt;

    /**
     * @var string
     *
     * @ORM\Column(name="flag_steal_message", type="string", length=255, nullable=true)
     */
    private $flagStealMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_paid_at", type="datetime", nullable=true)
     */
    private $lastPaidAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="build_rights", type="string", length=640, nullable=false)
     */
    private $buildRights = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="moderators", type="string", length=320, nullable=false)
     */
    private $moderators = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flag_stolen_by_uid", referencedColumnName="uid")
     * })
     */
    private $flagStolenByUid;

    /**
     * @var \AppBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_uid", referencedColumnName="uid")
     * })
     */
    private $ownerUid;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Territory
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
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Territory
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
     * @return Territory
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
     * @return Territory
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
     * Set radius
     *
     * @param float $radius
     *
     * @return Territory
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * Get radius
     *
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Territory
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set flagTexture
     *
     * @param string $flagTexture
     *
     * @return Territory
     */
    public function setFlagTexture($flagTexture)
    {
        $this->flagTexture = $flagTexture;

        return $this;
    }

    /**
     * Get flagTexture
     *
     * @return string
     */
    public function getFlagTexture()
    {
        return $this->flagTexture;
    }

    /**
     * Set flagStolen
     *
     * @param boolean $flagStolen
     *
     * @return Territory
     */
    public function setFlagStolen($flagStolen)
    {
        $this->flagStolen = $flagStolen;

        return $this;
    }

    /**
     * Get flagStolen
     *
     * @return boolean
     */
    public function getFlagStolen()
    {
        return $this->flagStolen;
    }

    /**
     * Set flagStolenAt
     *
     * @param \DateTime $flagStolenAt
     *
     * @return Territory
     */
    public function setFlagStolenAt($flagStolenAt)
    {
        $this->flagStolenAt = $flagStolenAt;

        return $this;
    }

    /**
     * Get flagStolenAt
     *
     * @return \DateTime
     */
    public function getFlagStolenAt()
    {
        return $this->flagStolenAt;
    }

    /**
     * Set flagStealMessage
     *
     * @param string $flagStealMessage
     *
     * @return Territory
     */
    public function setFlagStealMessage($flagStealMessage)
    {
        $this->flagStealMessage = $flagStealMessage;

        return $this;
    }

    /**
     * Get flagStealMessage
     *
     * @return string
     */
    public function getFlagStealMessage()
    {
        return $this->flagStealMessage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Territory
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set lastPaidAt
     *
     * @param \DateTime $lastPaidAt
     *
     * @return Territory
     */
    public function setLastPaidAt($lastPaidAt)
    {
        $this->lastPaidAt = $lastPaidAt;

        return $this;
    }

    /**
     * Get lastPaidAt
     *
     * @return \DateTime
     */
    public function getLastPaidAt()
    {
        return $this->lastPaidAt;
    }

    /**
     * Set buildRights
     *
     * @param string $buildRights
     *
     * @return Territory
     */
    public function setBuildRights($buildRights)
    {
        $this->buildRights = $buildRights;

        return $this;
    }

    /**
     * Get buildRights
     *
     * @return string
     */
    public function getBuildRights()
    {
        return $this->buildRights;
    }

    /**
     * Set moderators
     *
     * @param string $moderators
     *
     * @return Territory
     */
    public function setModerators($moderators)
    {
        $this->moderators = $moderators;

        return $this;
    }

    /**
     * Get moderators
     *
     * @return string
     */
    public function getModerators()
    {
        return $this->moderators;
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
     * Set flagStolenByUid
     *
     * @param \AppBundle\Entity\Account $flagStolenByUid
     *
     * @return Territory
     */
    public function setFlagStolenByUid(\AppBundle\Entity\Account $flagStolenByUid = null)
    {
        $this->flagStolenByUid = $flagStolenByUid;

        return $this;
    }

    /**
     * Get flagStolenByUid
     *
     * @return \AppBundle\Entity\Account
     */
    public function getFlagStolenByUid()
    {
        return $this->flagStolenByUid;
    }

    /**
     * Set ownerUid
     *
     * @param \AppBundle\Entity\Account $ownerUid
     *
     * @return Territory
     */
    public function setOwnerUid(\AppBundle\Entity\Account $ownerUid = null)
    {
        $this->ownerUid = $ownerUid;

        return $this;
    }

    /**
     * Get ownerUid
     *
     * @return \AppBundle\Entity\Account
     */
    public function getOwnerUid()
    {
        return $this->ownerUid;
    }
}
