<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteRepository")
 * @Serializer\ExclusionPolicy("none")
 */
class Quote
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="QuoteProduct", mappedBy="quote")
     */
    private $quoteProducts;

    /**
     * @var Retailer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Retailer", inversedBy="quotes")
     * @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
     * @Serializer\Exclude()
     */
    private $retailer;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\QuoteSupplierStatus", mappedBy="quote")
     */
    private $suppliersStatus;

    /**
     * @var bool
     *
     * @ORM\Column(name="send_to_supplier", type="boolean")
     */
    private $sendToSupplier = false;

    /**
     * @var string
     *
     * @ORM\Column(name="code_martins", type="string", length=255, nullable=true)
     */
    private $codeMartins;

    /**
     * var \DateTime
     *
     * @ORM\Column(name="begins_at", type="datetime", nullable=true)
     */
    private $beginsAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_date", type="string", length=255, nullable=true)
     */
    private $paymentDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="closed", type="boolean")
     */
    private $closed = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Serializer\Exclude()
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     * @Serializer\Exclude()
     */
    private $updatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean")
     * @Serializer\Exclude()
     */
    private $deleted = false;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quoteProducts = new ArrayCollection();
        $this->suppliersStatus = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->expiresAt = new \DateTime("2500-01-01");
        $this->beginsAt = new \DateTime();
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
     * Set name
     *
     * @param string $name
     *
     * @return Quote
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
     * Set type
     *
     * @param integer $type
     *
     * @return Quote
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return ArrayCollection
     */
    public function getQuoteProducts()
    {
        return $this->quoteProducts;
    }

    /**
     * @param QuoteProduct $quoteProduct
     * @return Quote
     */
    public function addQuoteProduct($quoteProduct) {
        if (!$this->quoteProducts->contains($quoteProduct)) $this->quoteProducts->add($quoteProduct);
        return $this;
    }

    /**
     * @param QuoteProduct $quoteProduct
     * @return Quote
     */
    public function removeQuoteProduct($quoteProduct) {
        if ($this->quoteProducts->contains($quoteProduct)) $this->quoteProducts->removeElement($quoteProduct);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSuppliersStatus()
    {
        return $this->suppliersStatus;
    }

    /**
     * @param QuoteSupplierStatus $supplierStatus
     * @return Quote
     */
    public function addSupplierStatus($supplierStatus) {
        if (!$this->suppliersStatus->contains($supplierStatus)) $this->suppliersStatus->add($supplierStatus);
        return $this;
    }

    /**
     * @param QuoteSupplierStatus $supplierStatus
     * @return Quote
     */
    public function removeSupplierStatus($supplierStatus) {
        if ($this->suppliersStatus->contains($supplierStatus)) $this->suppliersStatus->removeElement($supplierStatus);
        return $this;
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
     * @return Quote
     */
    public function setRetailer($retailer)
    {
        $this->retailer = $retailer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeMartins()
    {
        return $this->codeMartins;
    }

    /**
     * @param string $codeMartins
     * @return Quote
     */
    public function setCodeMartins($codeMartins)
    {
        $this->codeMartins = $codeMartins;
        return $this;
    }

    /**
     * @return bool
     */
    public function mustSendToSupplier()
    {
        return $this->sendToSupplier;
    }

    /**
     * @param bool $sendToSupplier
     * @return Quote
     */
    public function setSendToSupplier($sendToSupplier)
    {
        $this->sendToSupplier = $sendToSupplier;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginsAt()
    {
        return $this->beginsAt;
    }

    /**
     * @param \DateTime $beginsAt
     * @return Quote
     */
    public function setBeginsAt($beginsAt)
    {
        $this->beginsAt = $beginsAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param \DateTime $expiresAt
     * @return Quote
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @param string $paymentDate
     * @return Quote
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->closed;
    }

    /**
     * @param bool $closed
     * @return Quote
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Quote
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Quote
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
     * @return Quote
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
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
