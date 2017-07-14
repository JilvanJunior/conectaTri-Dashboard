<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * QuoteSupplierStatus
 *
 * @ORM\Table(name="quote_supplier_status")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteSupplierStatusRepository")
 * @Serializer\ExclusionPolicy("none")
 */
class QuoteSupplierStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Serializer\Exclude()
     */
    private $id;

    /**
     * @var Quote
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Quote", inversedBy="suppliersStatus")
     * @Serializer\Exclude()
     */
    private $quote;

    /**
     * @var Representative
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Representative")
     */
    private $representative;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status = 0;


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
     * Set quote
     *
     * @param Quote $quote
     *
     * @return QuoteSupplierStatus
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return Quote
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Set representative
     *
     * @param Representative $representative
     *
     * @return QuoteSupplierStatus
     */
    public function setRepresentative($representative)
    {
        $this->representative = $representative;

        return $this;
    }

    /**
     * Get representative
     *
     * @return Representative
     */
    public function getRepresentative()
    {
        return $this->representative;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return QuoteSupplierStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}

