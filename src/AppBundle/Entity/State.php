<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table(name="state")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StateRepository")
 */
class State
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
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=2)
     */
    private $uf;

    /**
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="state")
     */
    private $suppliers;

    /**
     * @ORM\OneToMany(targetEntity="Retailer", mappedBy="state")
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
     * @return State
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
     * Set uf
     *
     * @param string $uf
     *
     * @return State
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Add supplier
     *
     * @param Supplier $supplier
     *
     * @return State
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
     * @return State
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
     * Get retailers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRetailers()
    {
        return $this->retailers;
    }
}
