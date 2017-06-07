<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="supplier")
 */
class Supplier
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Representative", mappedBy="supplier")
     */
    private $representatives;

    /**
     * @ORM\ManyToOne(targetEntity="Retailer", inversedBy="suppliers")
     * @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
     */
    private $retailer;

    /**
     * @ORM\OneToMany(targetEntity="QuoteSupplier", mappedBy="supplier")
     */
    private $quoteSuppliers;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cnpj;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleted = false;


    /**
     * Supplier constructor.
     */
    public function __construct()
    {
        $this->representatives = new ArrayCollection();
        $this->quoteSuppliers = new ArrayCollection();
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
     * Set cnpj
     *
     * @param string $cnpj
     *
     * @return Supplier
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Supplier
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Supplier
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
     * @return Supplier
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
     * @return Supplier
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

    /**
     * Add representative
     *
     * @param \AppBundle\Entity\Representative $representative
     *
     * @return Supplier
     */
    public function addRepresentative(\AppBundle\Entity\Representative $representative)
    {
        $this->representatives[] = $representative;

        return $this;
    }

    /**
     * Remove representative
     *
     * @param \AppBundle\Entity\Representative $representative
     */
    public function removeRepresentative(\AppBundle\Entity\Representative $representative)
    {
        $this->representatives->removeElement($representative);
    }

    /**
     * Get representatives
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepresentatives()
    {
        return $this->representatives;
    }

    /**
     * Add quoteSupplier
     *
     * @param \AppBundle\Entity\QuoteSupplier $quoteSupplier
     *
     * @return Supplier
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
     * Set retailer
     *
     * @param \AppBundle\Entity\Retailer $retailer
     *
     * @return Supplier
     */
    public function setRetailer(\AppBundle\Entity\Retailer $retailer = null)
    {
        $this->retailer = $retailer;

        return $this;
    }

    /**
     * Get retailer
     *
     * @return \AppBundle\Entity\Retailer
     */
    public function getRetailer()
    {
        return $this->retailer;
    }
}
