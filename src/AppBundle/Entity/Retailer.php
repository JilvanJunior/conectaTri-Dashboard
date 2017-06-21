<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RetailerRepository")
 * @ORM\Table(name="retailer")
 * @Serializer\ExclusionPolicy("none")
 */
class Retailer implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Representative", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $representatives;

    /**
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $suppliers;

    /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="retailers")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * @ORM\OneToMany(targetEntity="Listing", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $listings;

    /**
     * @ORM\OneToMany(targetEntity="Quote", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $quotes;

    /**
     * @ORM\Column(type="string", length=100)
     * @Serializer\Exclude()
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Serializer\Exclude()
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cnpj;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companyName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fantasyName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $state;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cep;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cellphone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Serializer\Exclude()
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Serializer\Exclude()
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean")
     * @Serializer\Exclude()
     */
    private $deleted = false;

    /**
     * Retailer constructor.
     */
    public function __construct()
    {
        $this->suppliers = new ArrayCollection();
        $this->representatives = new ArrayCollection();
        $this->listings = new ArrayCollection();
        $this->quotes = new ArrayCollection();
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /** @see \Serializable::unserialize()
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            ) = unserialize($serialized);
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function eraseCredentials()
    {
    }

    public function getSalt()
    {
        return null;
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
     * Set email
     *
     * @param string $email
     *
     * @return Retailer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Retailer
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     *
     * @return Retailer
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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Retailer
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set fantasyName
     *
     * @param string $fantasyName
     *
     * @return Retailer
     */
    public function setFantasyName($fantasyName)
    {
        $this->fantasyName = $fantasyName;

        return $this;
    }

    /**
     * Get fantasyName
     *
     * @return string
     */
    public function getFantasyName()
    {
        return $this->fantasyName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Retailer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Retailer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Retailer
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return Retailer
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Retailer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     *
     * @return Retailer
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Retailer
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
     * @return Retailer
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
     * @return Retailer
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
     * @param Representative $representative
     *
     * @return Retailer
     */
    public function addRepresentative(Representative $representative)
    {
        $this->representatives[] = $representative;

        return $this;
    }

    /**
     * Remove representative
     *
     * @param Representative $representative
     */
    public function removeRepresentative(Representative $representative)
    {
        $this->representatives->removeElement($representative);
    }

    /**
     * Get representatives
     *
     * @return ArrayCollection
     */
    public function getRepresentatives()
    {
        return $this->representatives;
    }

    /**
     * Add supplier
     *
     * @param Supplier $supplier
     *
     * @return Retailer
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
     * @return ArrayCollection
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }

    /**
     * Add quote
     *
     * @param Quote $quote
     *
     * @return Retailer
     */
    public function addQuote(Quote $quote)
    {
        $this->quotes[] = $quote;

        return $this;
    }

    /**
     * Remove quote
     *
     * @param Quote $quote
     */
    public function removeQuote(Quote $quote)
    {
        $this->quotes->removeElement($quote);
    }

    /**
     * Get quotes
     *
     * @return ArrayCollection
     */
    public function getQuotes()
    {
        return $this->quotes;
    }

    /**
     * Add listing
     *
     * @param Listing $listing
     *
     * @return Retailer
     */
    public function addListing(Listing $listing)
    {
        $this->listings[] = $listing;

        return $this;
    }

    /**
     * Remove listing
     *
     * @param Listing $listing
     */
    public function removeListing(Listing $listing)
    {
        $this->listings->removeElement($listing);
    }

    /**
     * Get listings
     *
     * @return ArrayCollection
     */
    public function getListings()
    {
        return $this->listings;
    }

    /**
     * Set region
     *
     * @param Region $region
     *
     * @return Retailer
     */
    public function setRegion(Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }
}
