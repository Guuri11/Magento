<?php


namespace UdemyMagento\Attribute\Model\Plugin;

use UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberExtensionFactory;
use UdemyMagento\DataBaseModule\Model\AffiliateMemberRepostory;

class CodeAttributeExtension
{
    protected $extensionFactory;

    public function __construct(AffiliateMemberExtensionFactory $extensionFactory)
    {
        $this->extensionFactory = $extensionFactory;
    }

    public function aroundGetById(AffiliateMemberRepostory $repostory, \Closure $proceed, $id){
        $model = $proceed($id);
        $extensionAttributes = $model->getExtensionAttributes();
        if ($extensionAttributes == null){
            $extensionAttributes = $this->extensionFactory->create();
        }
        $extensionAttributes->setCode('Code #'.$id);
        $model->setExtensionAttributes($extensionAttributes);
        return $model;
    }
}
