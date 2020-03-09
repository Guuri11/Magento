<?php


namespace UdemyMagento\DataBaseModule\Api\Data;



use Magento\Framework\Api\ExtensibleDataInterface;

interface AffiliateMemberInterface extends ExtensibleDataInterface
{
    const ID = 'entity_id';
    const NAME = 'name';
    const STATUS = 'status';
    const ADDRESS = 'address';
    const PHONE_NUMBER = 'phone_number';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'created_at';
    // GETTERS
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getAddress();

    /**
     * @return bool
     */
    public function getStatus() ;

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getUpdatedAt();

    // SETTERS

    /**
     * @param int $id
     * @return \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface
     */
    public function setId($id);

    /**
     * @param string $name
     * @return \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface
     */
    public function setName(string $name);

    /**
     * @param string $address
     * @return \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface
     */
    public function setAddress(string $address);

    /**
     * @param string $phone_number
     * @return \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber(string $phone_number);

    /**
     * @param bool $status
     * @return \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface
     */
    public function setStatus(bool $status);

    // Extension Attributes

    /**
     * @return \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param  \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberExtensionInterface $extension
     * @return $this
     */
    public function setExtensionAttributes(\UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberExtensionInterface $extension);


}
