<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegionRepository")
 * @Serializer\ExclusionPolicy("none")
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
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\State", mappedBy="region")
     * @Serializer\Exclude()
     */
    private $states;

    /**
     * Region constructor.
     */
    public function __construct()
    {
        $this->states = new ArrayCollection();
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
     * @return ArrayCollection
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * Get suppliers
     *
     * @return ArrayCollection
     */
    public function getSuppliers()
    {
        $suppliers = new ArrayCollection();
        /** @var State $state */
        foreach ($this->states->toArray() as $state) {
            /** @var Supplier $supplier */
            foreach ($state->getSuppliers() as $supplier) {
                $suppliers->add($supplier);
            }
        }
        return $suppliers;
    }

    /**
     * Get suppliers
     *
     * @return ArrayCollection
     */
    public function getRetailers()
    {
        $retailers = new ArrayCollection();
        /** @var State $state */
        foreach ($this->states->toArray() as $state) {
            /** @var Retailer $retailer */
            foreach ($state->getRetailers() as $retailer) {
                $retailers->add($retailer);
            }
        }
        return $retailers;
    }
}
