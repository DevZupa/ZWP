<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player", indexes={@ORM\Index(name="player_uid", columns={"account_uid"})})
 * @ORM\Entity
 */
class Player
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
     * @ORM\Column(name="damage", type="float", precision=10, scale=0, nullable=false)
     */
    private $damage = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="hunger", type="float", precision=10, scale=0, nullable=false)
     */
    private $hunger = '100';

    /**
     * @var float
     *
     * @ORM\Column(name="thirst", type="float", precision=10, scale=0, nullable=false)
     */
    private $thirst = '100';

    /**
     * @var float
     *
     * @ORM\Column(name="alcohol", type="float", precision=10, scale=0, nullable=false)
     */
    private $alcohol = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=false)
     */
    private $temperature = '37';

    /**
     * @var float
     *
     * @ORM\Column(name="wetness", type="float", precision=10, scale=0, nullable=false)
     */
    private $wetness = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="oxygen_remaining", type="float", precision=10, scale=0, nullable=false)
     */
    private $oxygenRemaining = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="bleeding_remaining", type="float", precision=10, scale=0, nullable=false)
     */
    private $bleedingRemaining = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hitpoints", type="string", length=255, nullable=false)
     */
    private $hitpoints = '[]';

    /**
     * @var float
     *
     * @ORM\Column(name="direction", type="float", precision=10, scale=0, nullable=false)
     */
    private $direction = '0';

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
     * @var \DateTime
     *
     * @ORM\Column(name="spawned_at", type="datetime", nullable=false)
     */
    private $spawnedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_items", type="text", length=65535, nullable=false)
     */
    private $assignedItems;

    /**
     * @var string
     *
     * @ORM\Column(name="backpack", type="string", length=64, nullable=false)
     */
    private $backpack;

    /**
     * @var string
     *
     * @ORM\Column(name="backpack_items", type="text", length=65535, nullable=false)
     */
    private $backpackItems;

    /**
     * @var string
     *
     * @ORM\Column(name="backpack_magazines", type="text", length=65535, nullable=false)
     */
    private $backpackMagazines;

    /**
     * @var string
     *
     * @ORM\Column(name="backpack_weapons", type="text", length=65535, nullable=false)
     */
    private $backpackWeapons;

    /**
     * @var string
     *
     * @ORM\Column(name="current_weapon", type="string", length=64, nullable=false)
     */
    private $currentWeapon;

    /**
     * @var string
     *
     * @ORM\Column(name="goggles", type="string", length=64, nullable=false)
     */
    private $goggles;

    /**
     * @var string
     *
     * @ORM\Column(name="handgun_items", type="text", length=65535, nullable=false)
     */
    private $handgunItems;

    /**
     * @var string
     *
     * @ORM\Column(name="handgun_weapon", type="string", length=64, nullable=false)
     */
    private $handgunWeapon;

    /**
     * @var string
     *
     * @ORM\Column(name="headgear", type="string", length=64, nullable=false)
     */
    private $headgear;

    /**
     * @var string
     *
     * @ORM\Column(name="binocular", type="string", length=64, nullable=false)
     */
    private $binocular;

    /**
     * @var string
     *
     * @ORM\Column(name="loaded_magazines", type="text", length=65535, nullable=false)
     */
    private $loadedMagazines;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_weapon", type="string", length=64, nullable=false)
     */
    private $primaryWeapon;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_weapon_items", type="text", length=65535, nullable=false)
     */
    private $primaryWeaponItems;

    /**
     * @var string
     *
     * @ORM\Column(name="secondary_weapon", type="string", length=64, nullable=false)
     */
    private $secondaryWeapon;

    /**
     * @var string
     *
     * @ORM\Column(name="secondary_weapon_items", type="text", length=65535, nullable=false)
     */
    private $secondaryWeaponItems;

    /**
     * @var string
     *
     * @ORM\Column(name="uniform", type="string", length=64, nullable=false)
     */
    private $uniform;

    /**
     * @var string
     *
     * @ORM\Column(name="uniform_items", type="text", length=65535, nullable=false)
     */
    private $uniformItems;

    /**
     * @var string
     *
     * @ORM\Column(name="uniform_magazines", type="text", length=65535, nullable=false)
     */
    private $uniformMagazines;

    /**
     * @var string
     *
     * @ORM\Column(name="uniform_weapons", type="text", length=65535, nullable=false)
     */
    private $uniformWeapons;

    /**
     * @var string
     *
     * @ORM\Column(name="vest", type="string", length=64, nullable=false)
     */
    private $vest;

    /**
     * @var string
     *
     * @ORM\Column(name="vest_items", type="text", length=65535, nullable=false)
     */
    private $vestItems;

    /**
     * @var string
     *
     * @ORM\Column(name="vest_magazines", type="text", length=65535, nullable=false)
     */
    private $vestMagazines;

    /**
     * @var string
     *
     * @ORM\Column(name="vest_weapons", type="text", length=65535, nullable=false)
     */
    private $vestWeapons;

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
     * @var \AppBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_uid", referencedColumnName="uid")
     * })
     */
    private $accountUid;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Player
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
     * Set damage
     *
     * @param float $damage
     *
     * @return Player
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
     * Set hunger
     *
     * @param float $hunger
     *
     * @return Player
     */
    public function setHunger($hunger)
    {
        $this->hunger = $hunger;

        return $this;
    }

    /**
     * Get hunger
     *
     * @return float
     */
    public function getHunger()
    {
        return $this->hunger;
    }

    /**
     * Set thirst
     *
     * @param float $thirst
     *
     * @return Player
     */
    public function setThirst($thirst)
    {
        $this->thirst = $thirst;

        return $this;
    }

    /**
     * Get thirst
     *
     * @return float
     */
    public function getThirst()
    {
        return $this->thirst;
    }

    /**
     * Set alcohol
     *
     * @param float $alcohol
     *
     * @return Player
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * Get alcohol
     *
     * @return float
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return Player
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set wetness
     *
     * @param float $wetness
     *
     * @return Player
     */
    public function setWetness($wetness)
    {
        $this->wetness = $wetness;

        return $this;
    }

    /**
     * Get wetness
     *
     * @return float
     */
    public function getWetness()
    {
        return $this->wetness;
    }

    /**
     * Set oxygenRemaining
     *
     * @param float $oxygenRemaining
     *
     * @return Player
     */
    public function setOxygenRemaining($oxygenRemaining)
    {
        $this->oxygenRemaining = $oxygenRemaining;

        return $this;
    }

    /**
     * Get oxygenRemaining
     *
     * @return float
     */
    public function getOxygenRemaining()
    {
        return $this->oxygenRemaining;
    }

    /**
     * Set bleedingRemaining
     *
     * @param float $bleedingRemaining
     *
     * @return Player
     */
    public function setBleedingRemaining($bleedingRemaining)
    {
        $this->bleedingRemaining = $bleedingRemaining;

        return $this;
    }

    /**
     * Get bleedingRemaining
     *
     * @return float
     */
    public function getBleedingRemaining()
    {
        return $this->bleedingRemaining;
    }

    /**
     * Set hitpoints
     *
     * @param string $hitpoints
     *
     * @return Player
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
     * Set direction
     *
     * @param float $direction
     *
     * @return Player
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return float
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Player
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
     * @return Player
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
     * @return Player
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
     * Set spawnedAt
     *
     * @param \DateTime $spawnedAt
     *
     * @return Player
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
     * Set assignedItems
     *
     * @param string $assignedItems
     *
     * @return Player
     */
    public function setAssignedItems($assignedItems)
    {
        $this->assignedItems = $assignedItems;

        return $this;
    }

    /**
     * Get assignedItems
     *
     * @return string
     */
    public function getAssignedItems()
    {
        return $this->assignedItems;
    }

    /**
     * Set backpack
     *
     * @param string $backpack
     *
     * @return Player
     */
    public function setBackpack($backpack)
    {
        $this->backpack = $backpack;

        return $this;
    }

    /**
     * Get backpack
     *
     * @return string
     */
    public function getBackpack()
    {
        return $this->backpack;
    }

    /**
     * Set backpackItems
     *
     * @param string $backpackItems
     *
     * @return Player
     */
    public function setBackpackItems($backpackItems)
    {
        $this->backpackItems = $backpackItems;

        return $this;
    }

    /**
     * Get backpackItems
     *
     * @return string
     */
    public function getBackpackItems()
    {
        return $this->backpackItems;
    }

    /**
     * Set backpackMagazines
     *
     * @param string $backpackMagazines
     *
     * @return Player
     */
    public function setBackpackMagazines($backpackMagazines)
    {
        $this->backpackMagazines = $backpackMagazines;

        return $this;
    }

    /**
     * Get backpackMagazines
     *
     * @return string
     */
    public function getBackpackMagazines()
    {
        return $this->backpackMagazines;
    }

    /**
     * Set backpackWeapons
     *
     * @param string $backpackWeapons
     *
     * @return Player
     */
    public function setBackpackWeapons($backpackWeapons)
    {
        $this->backpackWeapons = $backpackWeapons;

        return $this;
    }

    /**
     * Get backpackWeapons
     *
     * @return string
     */
    public function getBackpackWeapons()
    {
        return $this->backpackWeapons;
    }

    /**
     * Set currentWeapon
     *
     * @param string $currentWeapon
     *
     * @return Player
     */
    public function setCurrentWeapon($currentWeapon)
    {
        $this->currentWeapon = $currentWeapon;

        return $this;
    }

    /**
     * Get currentWeapon
     *
     * @return string
     */
    public function getCurrentWeapon()
    {
        return $this->currentWeapon;
    }

    /**
     * Set goggles
     *
     * @param string $goggles
     *
     * @return Player
     */
    public function setGoggles($goggles)
    {
        $this->goggles = $goggles;

        return $this;
    }

    /**
     * Get goggles
     *
     * @return string
     */
    public function getGoggles()
    {
        return $this->goggles;
    }

    /**
     * Set handgunItems
     *
     * @param string $handgunItems
     *
     * @return Player
     */
    public function setHandgunItems($handgunItems)
    {
        $this->handgunItems = $handgunItems;

        return $this;
    }

    /**
     * Get handgunItems
     *
     * @return string
     */
    public function getHandgunItems()
    {
        return $this->handgunItems;
    }

    /**
     * Set handgunWeapon
     *
     * @param string $handgunWeapon
     *
     * @return Player
     */
    public function setHandgunWeapon($handgunWeapon)
    {
        $this->handgunWeapon = $handgunWeapon;

        return $this;
    }

    /**
     * Get handgunWeapon
     *
     * @return string
     */
    public function getHandgunWeapon()
    {
        return $this->handgunWeapon;
    }

    /**
     * Set headgear
     *
     * @param string $headgear
     *
     * @return Player
     */
    public function setHeadgear($headgear)
    {
        $this->headgear = $headgear;

        return $this;
    }

    /**
     * Get headgear
     *
     * @return string
     */
    public function getHeadgear()
    {
        return $this->headgear;
    }

    /**
     * Set binocular
     *
     * @param string $binocular
     *
     * @return Player
     */
    public function setBinocular($binocular)
    {
        $this->binocular = $binocular;

        return $this;
    }

    /**
     * Get binocular
     *
     * @return string
     */
    public function getBinocular()
    {
        return $this->binocular;
    }

    /**
     * Set loadedMagazines
     *
     * @param string $loadedMagazines
     *
     * @return Player
     */
    public function setLoadedMagazines($loadedMagazines)
    {
        $this->loadedMagazines = $loadedMagazines;

        return $this;
    }

    /**
     * Get loadedMagazines
     *
     * @return string
     */
    public function getLoadedMagazines()
    {
        return $this->loadedMagazines;
    }

    /**
     * Set primaryWeapon
     *
     * @param string $primaryWeapon
     *
     * @return Player
     */
    public function setPrimaryWeapon($primaryWeapon)
    {
        $this->primaryWeapon = $primaryWeapon;

        return $this;
    }

    /**
     * Get primaryWeapon
     *
     * @return string
     */
    public function getPrimaryWeapon()
    {
        return $this->primaryWeapon;
    }

    /**
     * Set primaryWeaponItems
     *
     * @param string $primaryWeaponItems
     *
     * @return Player
     */
    public function setPrimaryWeaponItems($primaryWeaponItems)
    {
        $this->primaryWeaponItems = $primaryWeaponItems;

        return $this;
    }

    /**
     * Get primaryWeaponItems
     *
     * @return string
     */
    public function getPrimaryWeaponItems()
    {
        return $this->primaryWeaponItems;
    }

    /**
     * Set secondaryWeapon
     *
     * @param string $secondaryWeapon
     *
     * @return Player
     */
    public function setSecondaryWeapon($secondaryWeapon)
    {
        $this->secondaryWeapon = $secondaryWeapon;

        return $this;
    }

    /**
     * Get secondaryWeapon
     *
     * @return string
     */
    public function getSecondaryWeapon()
    {
        return $this->secondaryWeapon;
    }

    /**
     * Set secondaryWeaponItems
     *
     * @param string $secondaryWeaponItems
     *
     * @return Player
     */
    public function setSecondaryWeaponItems($secondaryWeaponItems)
    {
        $this->secondaryWeaponItems = $secondaryWeaponItems;

        return $this;
    }

    /**
     * Get secondaryWeaponItems
     *
     * @return string
     */
    public function getSecondaryWeaponItems()
    {
        return $this->secondaryWeaponItems;
    }

    /**
     * Set uniform
     *
     * @param string $uniform
     *
     * @return Player
     */
    public function setUniform($uniform)
    {
        $this->uniform = $uniform;

        return $this;
    }

    /**
     * Get uniform
     *
     * @return string
     */
    public function getUniform()
    {
        return $this->uniform;
    }

    /**
     * Set uniformItems
     *
     * @param string $uniformItems
     *
     * @return Player
     */
    public function setUniformItems($uniformItems)
    {
        $this->uniformItems = $uniformItems;

        return $this;
    }

    /**
     * Get uniformItems
     *
     * @return string
     */
    public function getUniformItems()
    {
        return $this->uniformItems;
    }

    /**
     * Set uniformMagazines
     *
     * @param string $uniformMagazines
     *
     * @return Player
     */
    public function setUniformMagazines($uniformMagazines)
    {
        $this->uniformMagazines = $uniformMagazines;

        return $this;
    }

    /**
     * Get uniformMagazines
     *
     * @return string
     */
    public function getUniformMagazines()
    {
        return $this->uniformMagazines;
    }

    /**
     * Set uniformWeapons
     *
     * @param string $uniformWeapons
     *
     * @return Player
     */
    public function setUniformWeapons($uniformWeapons)
    {
        $this->uniformWeapons = $uniformWeapons;

        return $this;
    }

    /**
     * Get uniformWeapons
     *
     * @return string
     */
    public function getUniformWeapons()
    {
        return $this->uniformWeapons;
    }

    /**
     * Set vest
     *
     * @param string $vest
     *
     * @return Player
     */
    public function setVest($vest)
    {
        $this->vest = $vest;

        return $this;
    }

    /**
     * Get vest
     *
     * @return string
     */
    public function getVest()
    {
        return $this->vest;
    }

    /**
     * Set vestItems
     *
     * @param string $vestItems
     *
     * @return Player
     */
    public function setVestItems($vestItems)
    {
        $this->vestItems = $vestItems;

        return $this;
    }

    /**
     * Get vestItems
     *
     * @return string
     */
    public function getVestItems()
    {
        return $this->vestItems;
    }

    /**
     * Set vestMagazines
     *
     * @param string $vestMagazines
     *
     * @return Player
     */
    public function setVestMagazines($vestMagazines)
    {
        $this->vestMagazines = $vestMagazines;

        return $this;
    }

    /**
     * Get vestMagazines
     *
     * @return string
     */
    public function getVestMagazines()
    {
        return $this->vestMagazines;
    }

    /**
     * Set vestWeapons
     *
     * @param string $vestWeapons
     *
     * @return Player
     */
    public function setVestWeapons($vestWeapons)
    {
        $this->vestWeapons = $vestWeapons;

        return $this;
    }

    /**
     * Get vestWeapons
     *
     * @return string
     */
    public function getVestWeapons()
    {
        return $this->vestWeapons;
    }

    /**
     * Set lastUpdatedAt
     *
     * @param \DateTime $lastUpdatedAt
     *
     * @return Player
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
     * Set accountUid
     *
     * @param \AppBundle\Entity\Account $accountUid
     *
     * @return Player
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
