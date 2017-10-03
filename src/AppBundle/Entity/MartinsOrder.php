<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
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
     * @var string
     *
     * @ORM\Column(name="sale_date", type="string", length=45, nullable=true)
     */
    private $saleDate;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_date", type="string", length=45, nullable=true)
     */
    private $paymentDate;
    
    /**
     * @var string
     *
     * @ORM\Column(name="billing_date", type="string", length=45, nullable=true)
     */
    private $billingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_date", type="string", length=45, nullable=true)
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="completion_date", type="string", length=45, nullable=true)
     */
    private $completionDate;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var bool
     *
     * @ORM\Column(name="updating", type="boolean")
     * @Serializer\Exclude()
     */
    private $updating = false;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="OrderProduct", mappedBy="order")
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
     * @return MartinsOrder
     */
    public function addOrderProduct($orderProduct) {
        if (!$this->orderProducts->contains($orderProduct))
            $this->orderProducts->add($orderProduct);
        return $this;
    }

    /**
     * @param OrderProduct $orderProduct
     * @return MartinsOrder
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
     * @return MartinsOrder
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
     * Set saleDate
     *
     * @param string $saleDate
     *
     * @return MartinsOrder
     */
    public function setSaleDate($saleDate)
    {
        $this->saleDate = $saleDate;

        return $this;
    }

    /**
     * Get saleDate
     *
     * @return string
     */
    public function getSaleDate()
    {
        return $this->saleDate;
    }

    /**
     * Set paymentDate
     *
     * @param string $paymentDate
     *
     * @return MartinsOrder
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
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
     * @return MartinsOrder
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
     * @return MartinsOrder
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
     * @return MartinsOrder
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Set billingDate
     *
     * @param string $billingDate
     *
     * @return MartinsOrder
     */
    public function setBillingDate($billingDate)
    {
        $this->billingDate = $billingDate;

        return $this;
    }

    /**
     * Get billingDate
     *
     * @return string
     */
    public function getBillingDate()
    {
        return $this->billingDate;
    }

    /**
     * Set deliveryDate
     *
     * @param string $deliveryDate
     *
     * @return MartinsOrder
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set completionDate
     *
     * @param string $completionDate
     *
     * @return MartinsOrder
     */
    public function setCompletionDate($completionDate)
    {
        $this->completionDate = $completionDate;

        return $this;
    }

    /**
     * Get completionDate
     *
     * @return string
     */
    public function getCompletionDate()
    {
        return $this->completionDate;
    }

    /**
     * Set updating
     *
     * @param boolean $updating
     *
     * @return MartinsOrder
     */
    public function setUpdating($updating)
    {
        $this->updating = $updating;

        return $this;
    }

    /**
     * Get updating
     *
     * @return boolean
     */
    public function getUpdating()
    {
        return $this->updating;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return MartinsOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
