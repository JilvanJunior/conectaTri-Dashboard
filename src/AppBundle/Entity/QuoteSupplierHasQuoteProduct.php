<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * QuoteSupplierHasQuoteProduct
 *
 * @ORM\Table(name="quote_supplier_has_quote_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteSupplierHasQuoteProductRepository")
 */
class QuoteSupplierHasQuoteProduct
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
     * @ORM\ManyToOne(targetEntity="QuoteProduct", inversedBy="quoteSupplierHasQuoteProducts")
     * @ORM\JoinColumn(name="quote_product_id", referencedColumnName="id")
     */
    private $quoteProduct;

    /**
     * @ORM\ManyToOne(targetEntity="QuoteSupplier", inversedBy="quoteSupplierHasQuoteProducts")
     * @ORM\JoinColumn(name="quote_supplier_id", referencedColumnName="id")
     */
    private $quoteSupplier;

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
    private $deleted;

    /**
     * QuoteSupplierHasQuoteProduct constructor.
     */
    public function __construct()
    {
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
     * @return QuoteSupplierHasQuoteProduct
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
     * @return QuoteSupplierHasQuoteProduct
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
     * @return QuoteSupplierHasQuoteProduct
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
     * Set quoteProduct
     *
     * @param \AppBundle\Entity\QuoteProduct $quoteProduct
     *
     * @return QuoteSupplierHasQuoteProduct
     */
    public function setQuoteProduct(\AppBundle\Entity\QuoteProduct $quoteProduct = null)
    {
        $this->quoteProduct = $quoteProduct;

        return $this;
    }

    /**
     * Get quoteProduct
     *
     * @return \AppBundle\Entity\QuoteProduct
     */
    public function getQuoteProduct()
    {
        return $this->quoteProduct;
    }

    /**
     * Set quoteSupplier
     *
     * @param \AppBundle\Entity\QuoteSupplier $quoteSupplier
     *
     * @return QuoteSupplierHasQuoteProduct
     */
    public function setQuoteSupplier(\AppBundle\Entity\QuoteSupplier $quoteSupplier = null)
    {
        $this->quoteSupplier = $quoteSupplier;

        return $this;
    }

    /**
     * Get quoteSupplier
     *
     * @return \AppBundle\Entity\QuoteSupplier
     */
    public function getQuoteSupplier()
    {
        return $this->quoteSupplier;
    }
}
