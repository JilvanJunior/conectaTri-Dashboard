<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * ListingProduct
 *
 * @ORM\Table(name="listing_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ListingProductRepository")
 * @Serializer\ExclusionPolicy("none")
 */
class ListingProduct
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var Listing
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Listing", inversedBy="listingProducts")
     * @ORM\JoinColumn(name="listing_id", referencedColumnName="id")
     * @Serializer\Exclude()
     */
    private $listing;


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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return ListingProduct
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
     * Set product
     *
     * @param Product $product
     *
     * @return ListingProduct
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set listing
     *
     * @param Listing $listing
     *
     * @return ListingProduct
     */
    public function setListing($listing)
    {
        $this->listing = $listing;

        return $this;
    }

    /**
     * Get listing
     *
     * @return Listing
     */
    public function getListing()
    {
        return $this->listing;
    }
}

