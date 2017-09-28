<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierRepository")
 * @ORM\Table(name="supplier")
 * @Serializer\ExclusionPolicy("none")
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
     * @Serializer\Exclude()
     */
    private $representatives;

    /**
     * @ORM\ManyToOne(targetEntity="Retailer", inversedBy="suppliers")
     * @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
     * @Serializer\Exclude()
     */
    private $retailer;

    /**
     * @ORM\ManyToOne(targetEntity="State", inversedBy="suppliers")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="min_value", type="decimal", precision=10, scale=2, nullable=true)
     * @Serializer\Type("string")
     */
    private $minimumValue;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cnpj;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="rca", type="boolean")
     */
    private $rca = false;

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
     * @ORM\Column(type="datetime", nullable=true)
     * @Serializer\Exclude()
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean")
     * @Serializer\Exclude()
     */
    private $deleted = false;


    /**
     * Supplier constructor.
     */
    public function __construct()
    {
        $this->representatives = new ArrayCollection();
        $this->createdAt = new DateTime();
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
     * Set cnpj
     *
     * @param string $minimumValue
     * @return Supplier
     */
    public function setMinimumValue($minimumValue)
    {
        $this->minimumValue = $minimumValue;
        return $this;
    }

    /**
     * Get minimumValue
     *
     * @return string
     */
    public function getMinimumValue()
    {
        return $this->minimumValue;
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
     * @return bool
     */
    public function isRca()
    {
        return $this->rca;
    }

    /**
     * @param bool $rca
     * @return Supplier
     */
    public function setRca($rca)
    {
        $this->rca = $rca;
        return $this;
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
     * @param Representative $representative
     *
     * @return Supplier
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepresentatives()
    {
        return $this->representatives;
    }

    /**
     * Set retailer
     *
     * @param Retailer $retailer
     *
     * @return Supplier
     */
    public function setRetailer(Retailer $retailer = null)
    {
        $this->retailer = $retailer;

        return $this;
    }

    /**
     * Get retailer
     *
     * @return Retailer
     */
    public function getRetailer()
    {
        return $this->retailer;
    }

    /**
     * Set state
     *
     * @param State $state
     *
     * @return Supplier
     */
    public function setState(State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    public static function newMartinsSupplier()
    {
        $martinsSupplier = (new Supplier())
            ->setName('Martins')
            ->setCnpj('')
            ->setCreatedAt(new \DateTime())
            ->setDeleted(false)
            ->setRca(true);

        return $martinsSupplier;
    }
}
