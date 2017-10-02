<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

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
     * @ORM\Column(name="total", type="float")
     */
    private $total;
    
    /**
     * @var string
     *
     * @ORM\Column(name="link_to_bill", type="string", length=255, nullable=true)
     */
    private $linkToBill;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_due", type="string", length=255, nullable=true)
     */
    private $paymentDue;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="OrderProduct", mappedBy="orde")
     */
    private $orderProducts;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Serializer\Exclude()
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Serializer\Exclude()
     */
    private $updatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     * @Serializer\Exclude()
     */
    private $deleted = false;

    /**
     * MartinsOrder constructor.
     */
    public function __construct()
    {
        $this->orderProducts = new ArrayCollection();
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

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
     * @return ArrayCollection
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * @param OrderProduct $orderProduct
     * @return Quote
     */
    public function addOrderProduct($orderProduct) {
        if (!$this->orderProducts->contains($orderProduct))
            $this->orderProducts->add($orderProduct);
        return $this;
    }

    /**
     * @param OrderProduct $orderProduct
     * @return Quote
     */
    public function removeOrderProduct($orderProduct) {
        if ($this->orderProducts->contains($orderProduct))
            $this->orderProducts->removeElement($orderProduct);
        return $this;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Product
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
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
    
    /**
     * Set paymentDue
     *
     * @param string $paymentDue
     *
     * @return MartinsOrder
     */
    public function setPaymentDue($paymentDue)
    {
        $this->paymentDue = $paymentDue;

        return $this;
    }

    /**
     * Get paymentDue
     *
     * @return string
     */
    public function getPaymentDue()
    {
        return $this->paymentDue;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return Retailer
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     * @return Retailer
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return Retailer
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }
}

