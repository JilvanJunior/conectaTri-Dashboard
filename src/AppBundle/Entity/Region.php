<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegionRepository")
 */
class Region
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="region")
     */
    private $suppliers;

    /**
     * @ORM\OneToMany(targetEntity="Retailer", mappedBy="region")
     */
    private $retailers;

    /**
     * Region constructor.
     */
    public function __construct()
    {
        $this->suppliers = new ArrayCollection();
        $this->retailers = new ArrayCollection();
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
     * @return Region
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
     * Add supplier
     *
     * @param Supplier $supplier
     *
     * @return Region
     */
    public function addSupplier(Supplier $supplier)
    {
        $this->suppliers[] = $supplier;

        return $this;
    }

    /**
     * Remove supplier
     *
     * @param Supplier $supplier
     */
    public function removeSupplier(Supplier $supplier)
    {
        $this->suppliers->removeElement($supplier);
    }

    /**
     * Get suppliers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }

    /**
     * Add retailer
     *
     * @param Retailer $retailer
     *
     * @return Region
     */
    public function addRetailer(Retailer $retailer)
    {
        $this->retailers[] = $retailer;

        return $this;
    }

    /**
     * Remove retailer
     *
     * @param Retailer $retailer
     */
    public function removeRetailer(Retailer $retailer)
    {
        $this->retailers->removeElement($retailer);
    }

    /**
     * Get suppliers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRetailers()
    {
        return $this->retailers;
    }
}
