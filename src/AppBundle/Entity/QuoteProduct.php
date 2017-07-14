<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * QuoteProduct
 *
 * @ORM\Table(name="quote_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteProductRepository")
 * @Serializer\ExclusionPolicy("none")
 */
class QuoteProduct
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
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\QuoteSupplier", mappedBy="quoteProduct")
     */
    private $quoteSuppliers;

    /**
     * @var Quote
     *
     * @ORM\ManyToOne(targetEntity="Quote", inversedBy="quoteProducts")
     * @ORM\JoinColumn(name="quote_id", referencedColumnName="id")
     * @Serializer\Exclude()
     */
    private $quote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Serializer\Exclude()
     *
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
     */
    private $deleted = false;


    /**
     * QuoteProduct constructor.
     */
    public function __construct()
    {
        $this->quoteSuppliers = new ArrayCollection();
        $this->createdAt = new DateTime();
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
     * @return Quote
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param Quote $quote
     * @return QuoteProduct
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return QuoteProduct
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getQuoteSuppliers()
    {
        return $this->quoteSuppliers;
    }

    /**
     * @param QuoteSupplier $quoteSupplier
     * @return $this
     */
    public function addQuoteSupplier($quoteSupplier) {
        if (!$this->quoteSuppliers->contains($quoteSupplier)) $this->quoteSuppliers->add($quoteSupplier);
        return $this;
    }

    /**
     * @param QuoteSupplier $quoteSupplier
     * @return $this
     */
    public function removeQuoteSupplier($quoteSupplier) {
        if ($this->quoteSuppliers->contains($quoteSupplier)) $this->quoteSuppliers->removeElement($quoteSupplier);
        return $this;
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
     * @return QuoteProduct
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
     * @return QuoteProduct
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
     * @return QuoteProduct
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
