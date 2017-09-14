<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiSession
 *
 * @ORM\Table(name="api_session")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApiSessionRepository")
 */
class ApiSession
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
     * @var Retailer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Retailer")
     * @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
     */
    private $retailer;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="guid", unique=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="client_key", type="string", length=255, nullable=true)
     */
    private $clientKey;

    /**
     * @var bool
     *
     * @ORM\Column(name="rca_virtual", type="boolean")
     */
    private $rcaVirtual = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_used", type="datetime")
     */
    private $lastUsed;

    /**
     * @var FCMToken
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\FCMToken", mappedBy="apiSession", orphanRemoval=true)
     */
    private $fcmToken;

    /**
     * ApiSession constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->lastUsed = new \DateTime();
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
     * Get Retailer
     *
     * @return Retailer
     */
    public function getRetailer()
    {
        return $this->retailer;
    }

    /**
     * Set Retailer
     *
     * @param Retailer $retailer
     * @return ApiSession
     */
    public function setRetailer($retailer)
    {
        $this->retailer = $retailer;
        return $this;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return ApiSession
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getClientKey()
    {
        return $this->clientKey;
    }

    /**
     * @param string $clientKey
     * @return ApiSession
     */
    public function setClientKey($clientKey)
    {
        $this->clientKey = $clientKey;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function isRcaVirtual()
    {
        return $this->rcaVirtual;
    }

    /**
     * @param bool $rcaVirtual
     * @return ApiSession
     */
    public function setRcaVirtual($rcaVirtual)
    {
        $this->rcaVirtual = $rcaVirtual;
        return $this;
    }
    
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ApiSession
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
     * Set lastUsed
     *
     * @param \DateTime $lastUsed
     *
     * @return ApiSession
     */
    public function setLastUsed($lastUsed)
    {
        $this->lastUsed = $lastUsed;
    
        return $this;
    }

    /**
     * Get lastUsed
     *
     * @return \DateTime
     */
    public function getLastUsed()
    {
        return $this->lastUsed;
    }

    /**
     * @return FCMToken
     */
    public function getFcmToken()
    {
        return $this->fcmToken;
    }

    /**
     * @param FCMToken $fcmToken
     * @return ApiSession
     */
    public function setFcmToken($fcmToken)
    {
        $this->fcmToken = $fcmToken;
        return $this;
    }
}
