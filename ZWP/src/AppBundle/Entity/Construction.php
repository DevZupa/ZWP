<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Construction
 *
 * @ORM\Table(name="construction", indexes={@ORM\Index(name="account_uid", columns={"account_uid"}), @ORM\Index(name="territory_id", columns={"territory_id"})})
 * @ORM\Entity
 */
class Construction
{
    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=64, nullable=false)
     */
    private $class;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="spawned_at", type="datetime", nullable=false)
     */
    private $spawnedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     *
     * @ORM\Column(name="position_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionZ = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="direction_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $directionX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="direction_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $directionY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="direction_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $directionZ = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="up_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $upX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="up_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $upY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="up_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $upZ = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_locked", type="boolean", nullable=false)
     */
    private $isLocked = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pin_code", type="string", length=6, nullable=false)
     */
    private $pinCode = '000000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated_at", type="datetime", nullable=false)
     */
    private $lastUpdatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Territory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Territory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory_id", referencedColumnName="id")
     * })
     */
    private $territory;

    /**
     * @var \AppBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_uid", referencedColumnName="uid")
     * })
     */
    private $accountUid;



    /**
     * Set class
     *
     * @param string $class
     *
     * @return Construction
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set spawnedAt
     *
     * @param \DateTime $spawnedAt
     *
     * @return Construction
     */
    public function setSpawnedAt($spawnedAt)
    {
        $this->spawnedAt = $spawnedAt;

        return $this;
    }

    /**
     * Get spawnedAt
     *
     * @return \DateTime
     */
    public function getSpawnedAt()
    {
        return $this->spawnedAt;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Construction
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
     * @return Construction
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
     * @return Construction
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
     * Set directionX
     *
     * @param float $directionX
     *
     * @return Construction
     */
    public function setDirectionX($directionX)
    {
        $this->directionX = $directionX;

        return $this;
    }

    /**
     * Get directionX
     *
     * @return float
     */
    public function getDirectionX()
    {
        return $this->directionX;
    }

    /**
     * Set directionY
     *
     * @param float $directionY
     *
     * @return Construction
     */
    public function setDirectionY($directionY)
    {
        $this->directionY = $directionY;

        return $this;
    }

    /**
     * Get directionY
     *
     * @return float
     */
    public function getDirectionY()
    {
        return $this->directionY;
    }

    /**
     * Set directionZ
     *
     * @param float $directionZ
     *
     * @return Construction
     */
    public function setDirectionZ($directionZ)
    {
        $this->directionZ = $directionZ;

        return $this;
    }

    /**
     * Get directionZ
     *
     * @return float
     */
    public function getDirectionZ()
    {
        return $this->directionZ;
    }

    /**
     * Set upX
     *
     * @param float $upX
     *
     * @return Construction
     */
    public function setUpX($upX)
    {
        $this->upX = $upX;

        return $this;
    }

    /**
     * Get upX
     *
     * @return float
     */
    public function getUpX()
    {
        return $this->upX;
    }

    /**
     * Set upY
     *
     * @param float $upY
     *
     * @return Construction
     */
    public function setUpY($upY)
    {
        $this->upY = $upY;

        return $this;
    }

    /**
     * Get upY
     *
     * @return float
     */
    public function getUpY()
    {
        return $this->upY;
    }

    /**
     * Set upZ
     *
     * @param float $upZ
     *
     * @return Construction
     */
    public function setUpZ($upZ)
    {
        $this->upZ = $upZ;

        return $this;
    }

    /**
     * Get upZ
     *
     * @return float
     */
    public function getUpZ()
    {
        return $this->upZ;
    }

    /**
     * Set isLocked
     *
     * @param boolean $isLocked
     *
     * @return Construction
     */
    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    /**
     * Get isLocked
     *
     * @return boolean
     */
    public function getIsLocked()
    {
        return $this->isLocked;
    }

    /**
     * Set pinCode
     *
     * @param string $pinCode
     *
     * @return Construction
     */
    public function setPinCode($pinCode)
    {
        $this->pinCode = $pinCode;

        return $this;
    }

    /**
     * Get pinCode
     *
     * @return string
     */
    public function getPinCode()
    {
        return $this->pinCode;
    }

    /**
     * Set lastUpdatedAt
     *
     * @param \DateTime $lastUpdatedAt
     *
     * @return Construction
     */
    public function setLastUpdatedAt($lastUpdatedAt)
    {
        $this->lastUpdatedAt = $lastUpdatedAt;

        return $this;
    }

    /**
     * Get lastUpdatedAt
     *
     * @return \DateTime
     */
    public function getLastUpdatedAt()
    {
        return $this->lastUpdatedAt;
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
     * Set territory
     *
     * @param \AppBundle\Entity\Territory $territory
     *
     * @return Construction
     */
    public function setTerritory(\AppBundle\Entity\Territory $territory = null)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Get territory
     *
     * @return \AppBundle\Entity\Territory
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set accountUid
     *
     * @param \AppBundle\Entity\Account $accountUid
     *
     * @return Construction
     */
    public function setAccountUid(\AppBundle\Entity\Account $accountUid = null)
    {
        $this->accountUid = $accountUid;

        return $this;
    }

    /**
     * Get accountUid
     *
     * @return \AppBundle\Entity\Account
     */
    public function getAccountUid()
    {
        return $this->accountUid;
    }
}
