<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicle
 *
 * @ORM\Table(name="vehicle", indexes={@ORM\Index(name="account_uid", columns={"account_uid"})})
 * @ORM\Entity
 */
class Vehicle
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
     * @var boolean
     *
     * @ORM\Column(name="is_locked", type="boolean", nullable=false)
     */
    private $isLocked = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fuel", type="float", precision=10, scale=0, nullable=false)
     */
    private $fuel = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="damage", type="float", precision=10, scale=0, nullable=false)
     */
    private $damage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hitpoints", type="text", length=65535, nullable=false)
     */
    private $hitpoints;

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
    private $upZ = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_items", type="text", length=65535, nullable=false)
     */
    private $cargoItems;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_magazines", type="text", length=65535, nullable=false)
     */
    private $cargoMagazines;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_weapons", type="text", length=65535, nullable=false)
     */
    private $cargoWeapons;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_container", type="text", length=65535, nullable=false)
     */
    private $cargoContainer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated_at", type="datetime", nullable=false)
     */
    private $lastUpdatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="pin_code", type="string", length=6, nullable=false)
     */
    private $pinCode = '000000';

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_texture", type="text", length=65535, nullable=false)
     */
    private $vehicleTexture;

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
     *   @ORM\JoinColumn(name="account_uid", referencedColumnName="uid")
     * })
     */
    private $accountUid;



    /**
     * Set class
     *
     * @param string $class
     *
     * @return Vehicle
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
     * @return Vehicle
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
     * Set isLocked
     *
     * @param boolean $isLocked
     *
     * @return Vehicle
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
     * Set fuel
     *
     * @param float $fuel
     *
     * @return Vehicle
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return float
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set damage
     *
     * @param float $damage
     *
     * @return Vehicle
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return float
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set hitpoints
     *
     * @param string $hitpoints
     *
     * @return Vehicle
     */
    public function setHitpoints($hitpoints)
    {
        $this->hitpoints = $hitpoints;

        return $this;
    }

    /**
     * Get hitpoints
     *
     * @return string
     */
    public function getHitpoints()
    {
        return $this->hitpoints;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * Set cargoItems
     *
     * @param string $cargoItems
     *
     * @return Vehicle
     */
    public function setCargoItems($cargoItems)
    {
        $this->cargoItems = $cargoItems;

        return $this;
    }

    /**
     * Get cargoItems
     *
     * @return string
     */
    public function getCargoItems()
    {
        return $this->cargoItems;
    }

    /**
     * Set cargoMagazines
     *
     * @param string $cargoMagazines
     *
     * @return Vehicle
     */
    public function setCargoMagazines($cargoMagazines)
    {
        $this->cargoMagazines = $cargoMagazines;

        return $this;
    }

    /**
     * Get cargoMagazines
     *
     * @return string
     */
    public function getCargoMagazines()
    {
        return $this->cargoMagazines;
    }

    /**
     * Set cargoWeapons
     *
     * @param string $cargoWeapons
     *
     * @return Vehicle
     */
    public function setCargoWeapons($cargoWeapons)
    {
        $this->cargoWeapons = $cargoWeapons;

        return $this;
    }

    /**
     * Get cargoWeapons
     *
     * @return string
     */
    public function getCargoWeapons()
    {
        return $this->cargoWeapons;
    }

    /**
     * Set cargoContainer
     *
     * @param string $cargoContainer
     *
     * @return Vehicle
     */
    public function setCargoContainer($cargoContainer)
    {
        $this->cargoContainer = $cargoContainer;

        return $this;
    }

    /**
     * Get cargoContainer
     *
     * @return string
     */
    public function getCargoContainer()
    {
        return $this->cargoContainer;
    }

    /**
     * Set lastUpdatedAt
     *
     * @param \DateTime $lastUpdatedAt
     *
     * @return Vehicle
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
     * Set pinCode
     *
     * @param string $pinCode
     *
     * @return Vehicle
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
     * Set vehicleTexture
     *
     * @param string $vehicleTexture
     *
     * @return Vehicle
     */
    public function setVehicleTexture($vehicleTexture)
    {
        $this->vehicleTexture = $vehicleTexture;

        return $this;
    }

    /**
     * Get vehicleTexture
     *
     * @return string
     */
    public function getVehicleTexture()
    {
        return $this->vehicleTexture;
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
     * Set accountUid
     *
     * @param \AppBundle\Entity\Account $accountUid
     *
     * @return Vehicle
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
