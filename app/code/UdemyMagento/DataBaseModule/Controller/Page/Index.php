<?php


namespace UdemyMagento\DataBaseModule\Controller\Page;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use UdemyMagento\DataBaseModule\Model\AffiliateMember;
use UdemyMagento\DataBaseModule\Model\AffiliateMemberFactory;


class Index extends Action
{

    protected $affiliateMemberFactory;

    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory  )
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function execute()
    {
        $affiliate_member = $this->affiliateMemberFactory->create();
        $member = $affiliate_member->load(3);

        // INSERT
        // call a set function with the name of the table field that you want to update
        /*$member->setAddress('C/Javea nº14, Ondara(Alicante)');
        $member->save();*/

        // UPDATE
        /*$affiliate_member->addData(['name'=>'Jimmy','address'=>'C\Chicago nº21 Ondara','status'=>true,'phone_number'=>'345678123']);
        $affiliate_member->save();*/

        // DELETE
        //$member->delete();

        //var_dump($member->getData());

        // COLLECTION
        $collection = $affiliate_member->getCollection()
            ->addFieldToSelect('created_at');
        foreach ($collection as $item){
            var_dump($item->getData());
            echo '<br/>';
        }
    }
}
