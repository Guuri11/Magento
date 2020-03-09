<?php


namespace UdemyMagento\DataBaseModule\Model;


use Magento\Framework\Api\Search\SearchCriteriaInterface;
use Magento\Framework\Exception\AlreadyExistsException;
use UdemyMagento\DataBaseModule\Api\AffiliateMemberRepositoryInterface;
use UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface;
use UdemyMagento\DataBaseModule\Model\ResourceModel\AffiliateMember\CollectionFactory;
use UdemyMagento\DataBaseModule\Model\AffiliateMemberFactory;
use UdemyMagento\DataBaseModule\Model\ResourceModel\AffiliateMember;
use UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberSearchResultInterfaceFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;

class AffiliateMemberRepostory implements AffiliateMemberRepositoryInterface
{
    private $collectionFactory;
    private $affiliateMemberFactory;
    private $affiliateMember;
    private $affiliateMemberSearchResult;
    private $collectionProcessor;

    public function __construct(CollectionFactory $collectionFactory, AffiliateMemberFactory $affiliateMemberFactory,
                                AffiliateMember $affiliateMember, AffiliateMemberSearchResultInterfaceFactory $affiliateMemberSearchResult,
                                CollectionProcessor $collectionProcessor)
    {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMember = $affiliateMember;
        $this->affiliateMemberSearchResult = $affiliateMemberSearchResult;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @return \Magento\Framework\DataObject[]
     */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * @param int $id
     * @return AffiliateMemberInterface
     */
    public function getById($id)
    {
        return $this->affiliateMemberFactory->create()->load($id);
    }

    /**
     * @inheritDoc
     */
    public function update(AffiliateMemberInterface $affiliateMember)
    {
        $member = $this->affiliateMemberFactory->create()->load($affiliateMember->getId());
        foreach ($affiliateMember->getData() as $key=>$value){
            $member->setData($key,$value);
        }
        $this->affiliateMember->save($member);
        return $member;
    }

    /**
     * @param AffiliateMemberInterface $affiliateMember
     * @return AffiliateMemberInterface
     * @throws AlreadyExistsException
     */
    public function create(AffiliateMemberInterface $affiliateMember)
    {
        $this->affiliateMember->save($affiliateMember);
        return $affiliateMember;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($id)
    {
        $member = $this->affiliateMemberFactory->create()->load($id);
        $result = $this->affiliateMember->delete($member);
        if ($result)
            return true;
        else
            return false;
    }

    /**
     * @inheritDoc
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->affiliateMemberFactory->create()->getCollection();
        $this->collectionProcessor->process($searchCriteria,$collection);

        $searchResults = $this->affiliateMemberSearchResult->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getData());
        $searchResults->setTotalCount($collection->getSize());

        /*
            searchCriteria[filter_groups][0][filters][0][field]=name&
            searchCriteria[filter_groups][0][filters][0][value]=%25Leggings%25&
            searchCriteria[filter_groups][0][filters][0][condition_type]=like&
         */

        return $searchResults;
    }
}
