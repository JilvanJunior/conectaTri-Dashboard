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
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Representative", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $representatives;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $suppliers;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\FCMToken", mappedBy="retailer", orphanRemoval=true)
     * @Serializer\Exclude()
     */
    private $fcmTokens;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ApiSession", mappedBy="retailer", orphanRemoval=true)
     * @Serializer\Exclude()
     */
    private $apiSessions;

    /**
     * @var State
     *
     * @ORM\ManyToOne(targetEntity="State", inversedBy="retailers")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     */
    private $state;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Listing", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $listings;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Product", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $products;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Quote", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $quotes;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="MartinsOrder", mappedBy="retailer")
     * @Serializer\Exclude()
     */
    private $martinsOrders;
    
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     * @Serializer\Exclude()
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     * @Serializer\Exclude()
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $fantasyName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $complement;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $cellphone;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     * @Serializer\Exclude()
     */
    private $verified = false;

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
     * @var bool
     *
     * @ORM\Column(type="boolean")
     * @Serializer\Exclude()
     */
    private $deleted = false;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     * @Serializer\Exclude()
     */
    private $rcaVirtual = false;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     * @Serializer\Exclude()
     */
    private $registeredOnMartins = false;

    /**
     * Retailer constructor.
     */
    public function __construct()
    {
        $this->suppliers = new ArrayCollection();
        $this->representatives = new ArrayCollection();
        $this->listings = new ArrayCollection();
        $this->quotes = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->fcmTokens = new ArrayCollection();
        $this->martinsOrders = new ArrayCollection();
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function getRoles()
    {
        return array($this->roles);
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
            $this->cnpj,
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
            $this->cnpj,
            $this->password,
            ) = unserialize($serialized);
    }

    public function eraseCredentials()
    {
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->cnpj;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
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
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param State $state
     * @return Retailer
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Retailer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Retailer
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param string $cnpj
     * @return Retailer
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Retailer
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFantasyName()
    {
        return $this->fantasyName;
    }

    /**
     * @param string $fantasyName
     * @return Retailer
     */
    public function setFantasyName($fantasyName)
    {
        $this->fantasyName = $fantasyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Retailer
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Retailer
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param string $complement
     * @return Retailer
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param string $district
     * @return Retailer
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Retailer
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     * @return Retailer
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Retailer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * @param string $cellphone
     * @return Retailer
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return Retailer
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     * @return Retailer
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
     * @return Retailer
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRCAVirtual()
    {
        return $this->rcaVirtual;
    }

    /**
     * @param bool $rcaVirtual
     * @return Retailer
     */
    public function setRCAVirtual($rcaVirtual, $martinsSupplier, $em)
    {
        $this->rcaVirtual = $rcaVirtual;
        if($this->rcaVirtual) {
            $this->addMartinsRepresentative($martinsSupplier, $em);
        } else {
            $this->removeMartinsRepresentative();
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function isRegisteredOnMartins()
    {
        return $this->registeredOnMartins;
    }

    /**
     * @param bool $registeredOnMartins
     * @return Retailer
     */
    public function setRegisteredOnMartins($registeredOnMartins)
    {
        $this->registeredOnMartins = $registeredOnMartins;
        return $this;
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
     * Add martinsOrder
     *
     * @param MartinsOrder $martinsOrder
     *
     * @return Retailer
     */
    public function addMartinsOrder(MartinsOrder $martinsOrder)
    {
        $this->martinsOrders[] = $martinsOrder;

        return $this;
    }

    /**
     * Remove martinsOrder
     *
     * @param MartinsOrder $martinsOrder
     */
    public function removeMartinsOrder(MartinsOrder $martinsOrder)
    {
        $this->martinsOrders->removeElement($martinsOrder);
    }

    /**
     * Get martinsOrders
     *
     * @return ArrayCollection
     */
    public function getMartinsOrders()
    {
        return $this->martinsOrders;
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
     * Add product
     *
     * @param Product $product
     *
     * @return Retailer
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return ArrayCollection
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * @return bool
     */
    public function isVerified()
    {
        return $this->verified;
    }

    /**
     * @param bool $verified
     * @return Retailer
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getFcmTokens()
    {
        return $this->fcmTokens;
    }

    /**
     * @return ArrayCollection
     */
    public function getApiSessions()
    {
        return $this->apiSessions;
    }

    private function addMartinsRepresentative($martinsSupplier, $em)
    {
        $hasMartinsRepresentative = false;
        foreach($this->getRepresentatives() as $representative) {
            $supplier = $representative->getSupplier();
            if(!$supplier->isRca())
                continue;

            $representative->setDeleted(false);
            $hasMartinsRepresentative = true;
        }

        if($hasMartinsRepresentative)
            return;

        $representative = (new Representative())
            ->setRetailer($this)
            ->setSupplier($martinsSupplier)
            ->setName('Martins')
            ->setEmail('automatico@martins.com.br')
            ->setPhone('')
            ->setCreatedAt(new \DateTime())
            ->setDeleted(false);
        $em->persist($representative);
        
        $this->addRepresentative($representative);
    }

    private function removeMartinsRepresentative()
    {
        foreach($this->getRepresentatives() as $representative) {
            $supplier = $representative->getSupplier();
            if(!$supplier->isRca())
                continue;

            $representative->setDeleted(true);
        }
    }
}
