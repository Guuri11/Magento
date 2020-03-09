<?php


namespace UdemyMagento\DataBaseModule\Model;


use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Framework\Model\AbstractModel;
use UdemyMagento\DataBaseModule\Model\ResourceModel\AffiliateMember as AffiliateMemberRS;
use UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractExtensibleModel implements AffiliateMemberInterface
{
    protected function _construct()
    {
        // Link the model with the resource model
        $this->_init(AffiliateMemberRS::class);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int) $this->getData(AffiliateMemberInterface::ID);

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    /**
     * @return bool|mixed
     */
    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }

    /**
     * @param int $id
     * @return AffiliateMemberInterface
     */
    public function setId($id)
    {
        $this->setData(AffiliateMemberInterface::ID,$id);
    }

    /**
     * @param string $name
     * @return AffiliateMemberInterface
     */
    public function setName(string $name)
    {
        $this->setData(AffiliateMemberInterface::NAME,$name);
    }

    /**
     * @param string $address
     * @return AffiliateMemberInterface
     */
    public function setAddress(string $address)
    {
        $this->setData(AffiliateMemberInterface::ADDRESS,$address);

    }

    /**
     * @param string $phone_number
     * @return AffiliateMemberInterface
     */
    public function setPhoneNumber(string $phone_number)
    {
        $this->setData(AffiliateMemberInterface::PHONE_NUMBER,$phone_number);
    }

    /**
     * @param bool $status
     * @return AffiliateMemberInterface
     */
    public function setStatus(bool $status)
    {
        $this->setData(AffiliateMemberInterface::STATUS,$status);
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inheritDoc
     */
    public function setExtensionAttributes(\UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberExtensionInterface $extension)
    {
        return $this->_setExtensionAttributes($extension);
    }
}
