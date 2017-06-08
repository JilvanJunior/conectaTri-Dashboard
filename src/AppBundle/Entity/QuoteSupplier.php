<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * QuoteSupplier
 *
 * @ORM\Table(name="quote_supplier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteSupplierRepository")
 */
class QuoteSupplier
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
     * @var QuoteProduct
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\QuoteProduct")
     * @ORM\JoinColumn(name="quote_product_id", referencedColumnName="id")
     */
    private $quoteProduct;

    /**
     * @ORM\ManyToOne(targetEntity="Supplier")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     */
    private $supplier;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=2, scale=0)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted = false;


    /**
     * QuoteSupplier constructor.
     */
    public function __construct()
    {
        $this->quoteSupplierHasQuoteProducts = new ArrayCollection();
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
     * Set price
     *
     * @param string $price
     *
     * @return QuoteSupplier
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return QuoteSupplier
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return QuoteSupplier
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
     * @return QuoteSupplier
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
     * @return QuoteSupplier
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
     * @return QuoteSupplier
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
     * Set supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return QuoteSupplier
     */
    public function setSupplier(\AppBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \AppBundle\Entity\Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Add quoteSupplierHasQuoteProduct
     *
     * @param \AppBundle\Entity\QuoteSupplierHasQuoteProduct $quoteSupplierHasQuoteProduct
     *
     * @return QuoteSupplier
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
}
