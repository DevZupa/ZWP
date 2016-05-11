<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clan
 *
 * @ORM\Table(name="clan", indexes={@ORM\Index(name="leader_uid", columns={"leader_uid"})})
 * @ORM\Entity
 */
class Clan
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="insignia_texture", type="string", length=255, nullable=true)
     */
    private $insigniaTexture;

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
     *   @ORM\JoinColumn(name="leader_uid", referencedColumnName="uid")
     * })
     */
    private $leaderUid;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Clan
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Clan
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
     * Set insigniaTexture
     *
     * @param string $insigniaTexture
     *
     * @return Clan
     */
    public function setInsigniaTexture($insigniaTexture)
    {
        $this->insigniaTexture = $insigniaTexture;

        return $this;
    }

    /**
     * Get insigniaTexture
     *
     * @return string
     */
    public function getInsigniaTexture()
    {
        return $this->insigniaTexture;
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
     * Set leaderUid
     *
     * @param \AppBundle\Entity\Account $leaderUid
     *
     * @return Clan
     */
    public function setLeaderUid(\AppBundle\Entity\Account $leaderUid = null)
    {
        $this->leaderUid = $leaderUid;

        return $this;
    }

    /**
     * Get leaderUid
     *
     * @return \AppBundle\Entity\Account
     */
    public function getLeaderUid()
    {
        return $this->leaderUid;
    }
}
