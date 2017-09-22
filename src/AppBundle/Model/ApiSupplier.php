<?php
namespace AppBundle\Model;

use AppBundle\Entity\Representative;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ApiSupplier
 * @package AppBundle\Model
 * @Serializer\AccessType("public_method")
 */
class ApiSupplier
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $supplierId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $cnpj;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $contactPhone;

    /**
     * @var string
     */
    private $contactCellphone;

    /**
     * @var string
     */
    private $contactEmail;

    /**
     * $var int
     */
    private $minimumValue;

    /**
     * ApiSupplier constructor.
     */
    public function __construct(Representative $representative)
    {
        $this->id = $representative->getId();
        $this->contactName = $representative->getName();
        $this->contactPhone = $representative->getPhone();
        $this->contactCellphone = $representative->getCellphone();
        $this->contactEmail = $representative->getEmail();
        $this->name = $representative->getSupplier()->getName();
        $this->cnpj = $representative->getSupplier()->getCnpj();
        $this->minimumValue = $representative->getSupplier()->getMinimumValue();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ApiSupplier
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param int $supplierId
     * @return ApiSupplier
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ApiSupplier
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return ApiSupplier
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     * @return ApiSupplier
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return ApiSupplier
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactCellphone()
    {
        return $this->contactCellphone;
    }

    /**
     * @param string $contactCellphone
     * @return ApiSupplier
     */
    public function setContactCellphone($contactCellphone)
    {
        $this->contactCellphone = $contactCellphone;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     * @return ApiSupplier
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumValue()
    {
        return $this->minimumValue;
    }

    /**
     * @param int $minimumValue
     * @return ApiSupplier
     */
    public function setMinimumValue($minimumValue)
    {
        $this->minimumValue = $minimumValue;
        return $this;
    }
}
