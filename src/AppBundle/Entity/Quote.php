<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use AppBundle\Service\MartinsConnector;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteRepository")
 * @Serializer\ExclusionPolicy("none")
 */
class Quote
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
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="QuoteProduct", mappedBy="quote", cascade={"persist"})
     */
    private $quoteProducts;

    /**
     * @var Retailer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Retailer", inversedBy="quotes")
     * @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
     * @Serializer\Exclude()
     */
    private $retailer;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\QuoteSupplierStatus", mappedBy="quote", cascade={"persist"})
     */
    private $suppliersStatus;

    /**
     * @var bool
     *
     * @ORM\Column(name="send_to_supplier", type="boolean")
     */
    private $sendToSupplier = false;

    /**
     * @var string
     *
     * @ORM\Column(name="code_martins", type="string", length=255, nullable=true)
     */
    private $codeMartins;

    /**
     * var \DateTime
     *
     * @ORM\Column(name="begins_at", type="datetime", nullable=true)
     */
    private $beginsAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_date", type="string", length=255, nullable=true)
     */
    private $paymentDate;

    /**
     * @var int
     * @ORM\Column(name="id_order", type="integer", nullable=true)
     */
    private $idOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="closed", type="boolean")
     */
    private $closed = false;

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
     * Constructor
     */
    public function __construct()
    {
        $this->quoteProducts = new ArrayCollection();
        $this->suppliersStatus = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->expiresAt = new \DateTime("2500-01-01");
        $this->beginsAt = new \DateTime();
    }

    public function __clone()
    {
        $newQuoteProducts = new ArrayCollection();
        foreach($this->quoteProducts as $quoteProduct) {
            $clone = clone($quoteProduct);
            $clone->setQuote($this);
            $newQuoteProducts->add($clone);
        }
        $this->quoteProducts = $newQuoteProducts;

        $newSuppliersStatus = new ArrayCollection();
        foreach($this->suppliersStatus as $supplierStatus) {
            $clone = clone($supplierStatus);
            $clone->setQuote($this);
            $newSuppliersStatus->add($clone);
        }
        $this->suppliersStatus = $newSuppliersStatus;
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
     * @return Quote
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
     * @return Quote
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
     * @return ArrayCollection
     */
    public function getQuoteProducts()
    {
        return $this->quoteProducts;
    }


    /**
     * @param Product $product
     * @return array|string
     */
    public function getQuoteSuppliersOf($product) {
        $searchResult = null;

        /** @var QuoteProduct $quoteProduct */
        foreach($this->quoteProducts as $quoteProduct) {
            if($quoteProduct->getProduct()->getId() == $product->getId()) {
                $searchResult = $quoteProduct;
                break;
            }
        }

        if(is_null($searchResult))
            return "";

        $result = [];
        /** @var QuoteSupplier $quoteSupplier */
        foreach($searchResult->getQuoteSuppliers() as $quoteSupplier)
            if(!$quoteSupplier->isDeleted())
                $result[] = $quoteSupplier;

        return $result;
    }

    /**
     * @param QuoteProduct $quoteProduct
     * @return Quote
     */
    public function addQuoteProduct($quoteProduct) {
        if (!$this->quoteProducts->contains($quoteProduct)) $this->quoteProducts->add($quoteProduct);
        return $this;
    }

    /**
     * @param QuoteProduct $quoteProduct
     * @return Quote
     */
    public function removeQuoteProduct($quoteProduct) {
        if ($this->quoteProducts->contains($quoteProduct)) $this->quoteProducts->removeElement($quoteProduct);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSuppliersStatus()
    {
        return $this->suppliersStatus;
    }

    /**
     * @param QuoteSupplierStatus $supplierStatus
     * @return Quote
     */
    public function addSupplierStatus($supplierStatus) {
        if (!$this->suppliersStatus->contains($supplierStatus)) $this->suppliersStatus->add($supplierStatus);
        return $this;
    }

    /**
     * @param QuoteSupplierStatus $supplierStatus
     * @return Quote
     */
    public function removeSupplierStatus($supplierStatus) {
        if ($this->suppliersStatus->contains($supplierStatus)) $this->suppliersStatus->removeElement($supplierStatus);
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
     * @return Quote
     */
    public function setRetailer($retailer)
    {
        $this->retailer = $retailer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeMartins()
    {
        return $this->codeMartins;
    }

    /**
     * @param string $codeMartins
     * @return Quote
     */
    public function setCodeMartins($codeMartins)
    {
        $this->codeMartins = $codeMartins;
        return $this;
    }

    /**
     * @return bool
     */
    public function mustSendToSupplier()
    {
        return $this->sendToSupplier;
    }

    /**
     * @param bool $sendToSupplier
     * @return Quote
     */
    public function setSendToSupplier($sendToSupplier)
    {
        $this->sendToSupplier = $sendToSupplier;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginsAt()
    {
        return $this->beginsAt;
    }

    /**
     * @param \DateTime $beginsAt
     * @return Quote
     */
    public function setBeginsAt($beginsAt)
    {
        $this->beginsAt = $beginsAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param \DateTime $expiresAt
     * @return Quote
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @param string $paymentDate
     * @return Quote
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->closed;
    }

    /**
     * @param bool $closed
     * @return Quote
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
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
     * @return Quote
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
     * @return Quote
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
     * Get IdOrder
     * @return int
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }

    /**
     * Check IdOrder
     * @return bool
     */
    public function hasIdOrder()
    {
        return !is_null($this->idOrder);
    }

    /**
     * @param int $idOrder
     * @return Quote
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;
        return $this;
    }

    /**
     * @param bool $deleted
     * @return Quote
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Get deleted
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Verify if quote is made by a RCA flagged Retailer
     * and generate the RCA quote if needed
     * @param $chave
     * @param $url
     */
    public function checkForRCAQuote($chave, $url)
    {
        if(!$this->retailer->isRCAVirtual())
            return;

        foreach($this->suppliersStatus as $suppliersStatus) {
            /** @var Representative $representative */
            $representative = $suppliersStatus->getRepresentative();
            if(is_null($representative))
                continue;
            $supplier = $representative->getSupplier();
            if(is_null($supplier))
                continue;

            if($supplier->isRca())
                $this->makeRCAQuote($chave, $url, $supplier);
        }
    }

    /**
     * @param $chave
     * @param $url
     * @param Supplier $supplier
     */
    private function makeRCAQuote($chave, $url, $supplier)
    {
        $products = [];
        $quantitiesByProduct = [];

        /** @var QuoteProduct $quoteProduct */
        foreach($this->quoteProducts as $quoteProduct) {
            $product = $quoteProduct->getProduct();
            
            $products[] = $product;
            $quantitiesByProduct[$product->getId()] = [
                'idMartins' => 0,
                'quantity' => $quoteProduct->getQuantity()
            ];
        }

        $mc = new MartinsConnector($chave, $url, $this->retailer);

        $codes = $mc->getMartinsCodeByEan($products);
        if(empty($codes))
            return;

        foreach($codes as $key => $code) {
            $quantitiesByProduct[$key]['idMartins'] = $code;
        }

        $infos = $mc->getMartinsInfos($quantitiesByProduct);
        foreach($this->quoteProducts as $quoteProduct) {
            $product = $quoteProduct->getProduct();
            if(!key_exists($product->getId(), $infos))
                continue;

            $quoteSuppliers = $quoteProduct->getQuoteSuppliers();
            foreach($quoteSuppliers as $quoteSupplier) {
                if($supplier->getId() != $quoteSupplier->getRepresentative()->getSupplier()->getId())
                    continue;

                $preco = (double) $infos[$product->getId()]->PrecoNormal;
                if($quoteProduct->getQuantity() > 0)
                    $precoUnitario = $preco/$quoteProduct->getQuantity();
                else
                    $precoUnitario = 0;
                $quoteSupplier->setPrice($precoUnitario);
                $quoteSupplier->setFilledIn(true);

                break;
            }
        }

        foreach($this->getSuppliersStatus() as $supplierStatus) {
            if($supplier->getId() != $supplierStatus->getRepresentative()->getSupplier()->getId())
                continue;

            $supplierStatus->setStatus(1);
            break;
        }
    }

    /**
     * @param Representative $representative
     * @return bool
     */
    public function hasRepresentative($representative)
    {
        foreach($this->suppliersStatus as $quoteSupplierStatus)
            if($quoteSupplierStatus->getRepresentative()->getId() == $representative->getId())
                return true;

        return false;
    }

    /**
     * @param Product $product
     * @return bool
     */
    public function hasProduct($product)
    {
        foreach($this->quoteProducts as $quoteProduct)
            if($quoteProduct->getProduct()->getId() == $product->getId())
                return true;

        return false;
    }

    /**
     * @param Product $product
     * @return int
     */
    public function getProductQuantity($product)
    {
        foreach($this->quoteProducts as $quoteProduct)
            if($quoteProduct->getProduct()->getId() == $product->getId())
                return $quoteProduct->getQuantity();

        return 0;
    }

    /**
     * @return int
     */
    public function countValidProducts()
    {
        $i = 0;
        foreach($this->quoteProducts as $quoteProduct)
            if(!$quoteProduct->isDeleted())
                $i++;

        return $i;
    }
}
