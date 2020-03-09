<?php


namespace UdemyMagento\Attribute\Model\Config;


use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Options extends AbstractSource
{

    /**
     * @inheritDoc
     */
    public function getAllOptions()
    {
        $this->_options = [
            ['label'=>__('Gold'),'value'=>'gold'],
            ['label'=>__('Silver'),'value'=>'silver'],
            ['label'=>__('Bronze'),'value'=>'bronze'],
        ];
        return $this->_options;
    }
}
