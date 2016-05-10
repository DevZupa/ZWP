<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account", indexes={@ORM\Index(name="clan_id", columns={"clan_id"})})
 * @ORM\Entity
 */
class Account
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
     * @ORM\Column(name="money", type="float", precision=10, scale=0, nullable=false)
     */
    private $money = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="kills", type="integer", nullable=false)
     */
    private $kills = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deaths", type="integer", nullable=false)
     */
    private $deaths = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_connect_at", type="datetime", nullable=false)
     */
    private $firstConnectAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_connect_at", type="datetime", nullable=false)
     */
    private $lastConnectAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_disconnect_at", type="datetime", nullable=true)
     */
    private $lastDisconnectAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_connections", type="integer", nullable=false)
     */
    private $totalConnections = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var \AppBundle\Entity\Clan
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Clan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clan_id", referencedColumnName="id")
     * })
     */
    private $clan;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Account
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
     * Set money
     *
     * @param float $money
     *
     * @return Account
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return float
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Account
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set kills
     *
     * @param integer $kills
     *
     * @return Account
     */
    public function setKills($kills)
    {
        $this->kills = $kills;

        return $this;
    }

    /**
     * Get kills
     *
     * @return integer
     */
    public function getKills()
    {
        return $this->kills;
    }

    /**
     * Set deaths
     *
     * @param integer $deaths
     *
     * @return Account
     */
    public function setDeaths($deaths)
    {
        $this->deaths = $deaths;

        return $this;
    }

    /**
     * Get deaths
     *
     * @return integer
     */
    public function getDeaths()
    {
        return $this->deaths;
    }

    /**
     * Set firstConnectAt
     *
     * @param \DateTime $firstConnectAt
     *
     * @return Account
     */
    public function setFirstConnectAt($firstConnectAt)
    {
        $this->firstConnectAt = $firstConnectAt;

        return $this;
    }

    /**
     * Get firstConnectAt
     *
     * @return \DateTime
     */
    public function getFirstConnectAt()
    {
        return $this->firstConnectAt;
    }

    /**
     * Set lastConnectAt
     *
     * @param \DateTime $lastConnectAt
     *
     * @return Account
     */
    public function setLastConnectAt($lastConnectAt)
    {
        $this->lastConnectAt = $lastConnectAt;

        return $this;
    }

    /**
     * Get lastConnectAt
     *
     * @return \DateTime
     */
    public function getLastConnectAt()
    {
        return $this->lastConnectAt;
    }

    /**
     * Set lastDisconnectAt
     *
     * @param \DateTime $lastDisconnectAt
     *
     * @return Account
     */
    public function setLastDisconnectAt($lastDisconnectAt)
    {
        $this->lastDisconnectAt = $lastDisconnectAt;

        return $this;
    }

    /**
     * Get lastDisconnectAt
     *
     * @return \DateTime
     */
    public function getLastDisconnectAt()
    {
        return $this->lastDisconnectAt;
    }

    /**
     * Set totalConnections
     *
     * @param integer $totalConnections
     *
     * @return Account
     */
    public function setTotalConnections($totalConnections)
    {
        $this->totalConnections = $totalConnections;

        return $this;
    }

    /**
     * Get totalConnections
     *
     * @return integer
     */
    public function getTotalConnections()
    {
        return $this->totalConnections;
    }

    /**
     * Get uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set clan
     *
     * @param \AppBundle\Entity\Clan $clan
     *
     * @return Account
     */
    public function setClan(\AppBundle\Entity\Clan $clan = null)
    {
        $this->clan = $clan;

        return $this;
    }

    /**
     * Get clan
     *
     * @return \AppBundle\Entity\Clan
     */
    public function getClan()
    {
        return $this->clan;
    }
}
