<?php


namespace UdemyMagento\FirstModule\Model;


use \Magento\Catalog\Api\ProductRepositoryInterface;

class CustomImplementation implements ProductRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function save(\Magento\Catalog\Api\Data\ProductInterface $product, $saveOptions = false)
    {
        // TODO: Implement save() method.
    }

    /**
     * @inheritDoc
     */
    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement get() method.
    }

    /**
     * @inheritDoc
     */
    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement getById() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteById($sku)
    {
        // TODO: Implement deleteById() method.
    }

    /**
     * @inheritDoc
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }
}
