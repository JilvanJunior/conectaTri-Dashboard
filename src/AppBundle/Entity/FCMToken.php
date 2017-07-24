<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FCMToken
 *
 * @ORM\Table(name="fcm_token")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FirebaseTokenRepository")
 */
class FCMToken
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
     * @ORM\Column(name="token", type="string", length=255, unique=true)
     */
    private $token;

    /**
     * @var Retailer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Retailer", inversedBy="fcmTokens")
     */
    private $retailer;

    /**
     * @var ApiSession
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\ApiSession", inversedBy="fcmToken")
     */
    private $apiSession;

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
     * Set fcmToken
     *
     * @param string $token
     *
     * @return FCMToken
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get fcmToken
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return Retailer
     */
    public function getRetailer()
    {
        return $this->retailer;
    }

    /**
     * @param Retailer $retailer
     * @return FCMToken
     */
    public function setRetailer($retailer)
    {
        $this->retailer = $retailer;
        return $this;
    }

    /**
     * @return ApiSession
     */
    public function getApiSession()
    {
        return $this->apiSession;
    }

    /**
     * @param ApiSession $apiSession
     * @return FCMToken
     */
    public function setApiSession($apiSession)
    {
        $this->apiSession = $apiSession;
        return $this;
    }
}

