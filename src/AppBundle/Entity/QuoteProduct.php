<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * QuoteProduct
 *
 * @ORM\Table(name="quote_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteProductRepository")
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
     */
    private $quote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
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
        $this->quoteSupplierHasQuoteProducts = new ArrayCollection();
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return QuoteProduct
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return QuoteProduct
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
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
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return QuoteProduct
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add quoteSupplierHasQuoteProduct
     *
     * @param \AppBundle\Entity\QuoteSupplierHasQuoteProduct $quoteSupplierHasQuoteProduct
     *
     * @return QuoteProduct
     */
    public function addQuoteSupplierHasQuoteProduct(\AppBundle\Entity\QuoteSupplierHasQuoteProduct $quoteSupplierHasQuoteProduct)
    {
        $this->quoteSupplierHasQuoteProducts[] = $quoteSupplierHasQuoteProduct;

        return $this;
    }

    /**
     * Remove quoteSupplierHasQuoteProduct
     *
     * @param \AppBundle\Entity\QuoteSupplierHasQuoteProduct $quoteSupplierHasQuoteProduct
     */
    public function removeQuoteSupplierHasQuoteProduct(\AppBundle\Entity\QuoteSupplierHasQuoteProduct $quoteSupplierHasQuoteProduct)
    {
        $this->quoteSupplierHasQuoteProducts->removeElement($quoteSupplierHasQuoteProduct);
    }

    /**
     * Get quoteSupplierHasQuoteProducts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuoteSupplierHasQuoteProducts()
    {
        return $this->quoteSupplierHasQuoteProducts;
    }

    /**
     * Add quoteSupplier
     *
     * @param \AppBundle\Entity\QuoteSupplier $quoteSupplier
     *
     * @return QuoteProduct
     */
    public function addQuoteSupplier(\AppBundle\Entity\QuoteSupplier $quoteSupplier)
    {
        $this->quoteSuppliers[] = $quoteSupplier;

        return $this;
    }

    /**
     * Remove quoteSupplier
     *
     * @param \AppBundle\Entity\QuoteSupplier $quoteSupplier
     */
    public function removeQuoteSupplier(\AppBundle\Entity\QuoteSupplier $quoteSupplier)
    {
        $this->quoteSuppliers->removeElement($quoteSupplier);
    }

    /**
     * Get quoteSuppliers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuoteSuppliers()
    {
        return $this->quoteSuppliers;
    }

    /**
     * Set quote
     *
     * @param \AppBundle\Entity\Quote $quote
     *
     * @return QuoteProduct
     */
    public function setQuote(\AppBundle\Entity\Quote $quote = null)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return \AppBundle\Entity\Quote
     */
    public function getQuote()
    {
        return $this->quote;
    }
}
