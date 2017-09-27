<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MartinsOrder
 *
 * @ORM\Table(name="martins_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MartinsOrderRepository")
 */
class MartinsOrder
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
     * @ORM\ManyToOne(targetEntity="Retailer", inversedBy="martinsOrders")
     * @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
     * @Serializer\Exclude()
     */
    private $retailer;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="link_to_bill", type="string", length=255, nullable=true)
     */
    private $linkToBill;


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
     * @return Retailer
     */
    public function getRetailer()
    {
        return $this->retailer;
    }

    /**
     * @param Retailer $retailer
     * @return MartinsOrder
     */
    public function setRetailer($retailer)
    {
        $this->retailer = $retailer;
        return $this;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return MartinsOrder
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set linkToBill
     *
     * @param string $linkToBill
     *
     * @return MartinsOrder
     */
    public function setLinkToBill($linkToBill)
    {
        $this->linkToBill = $linkToBill;

        return $this;
    }

    /**
     * Get linkToBill
     *
     * @return string
     */
    public function getLinkToBill()
    {
        return $this->linkToBill;
    }
}

