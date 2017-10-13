<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Listing
 *
 * @ORM\Table(name="listing")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ListingRepository")
 * @Serializer\ExclusionPolicy("none")
 */
class Listing
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4096)
     */
    private $description;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ListingProduct", mappedBy="listing")
     */
    private $listingProducts;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Representative")
     * @ORM\JoinTable(name="listing_has_representative",
     *     joinColumns={@ORM\JoinColumn(name="listing_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="representative_id", referencedColumnName="id")}
     *     )
     */
    private $representatives;

    /**
     * @var Retailer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Retailer", inversedBy="listings")
     * @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
     * @Serializer\Exclude()
     */
    private $retailer;

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
     * Listing constructor.
     */
    public function __construct()
    {
        $this->listingProducts = new ArrayCollection();
        $this->representatives = new ArrayCollection();
        $this->createdAt = new \DateTime();
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
     * @return Listing
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
     * @return Listing
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
     * Set description
     *
     * @param string $description
     *
     * @return Listing
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return ArrayCollection
     */
    public function getListingProducts()
    {
        return $this->listingProducts;
    }

    /**
     * @param ListingProduct $product
     * @return $this
     */
    public function addListingProduct($product) {
        if (!$this->listingProducts->contains($product)) $this->listingProducts->add($product);
        return $this;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function hasProduct($product) {
        foreach($this->listingProducts as $listingProduct)
            if($listingProduct->getProduct()->getId() == $product->getId())
                return true;

        return false;
    }

    /**
     * @param ListingProduct $product
     * @return $this
     */
    public function removeListingProduct($product) {
        if ($this->listingProducts->contains($product)) $this->listingProducts->removeElement($product);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getRepresentatives()
    {
        return $this->representatives;
    }

    /**
     * @param Representative $representative
     * @return $this
     */
    public function addRepresentative($representative) {
        if (!$this->representatives->contains($representative)) $this->representatives->add($representative);
        return $this;
    }

    /**
     * @param Representative $representative
     * @return $this
     */
    public function removeRepresentative($representative) {
        if ($this->representatives->contains($representative)) $this->representatives->removeElement($representative);
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
     * @return Listing
     */
    public function setRetailer($retailer)
    {
        $this->retailer = $retailer;
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
     * @return Listing
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
     * @return Listing
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
     * @return Listing
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
