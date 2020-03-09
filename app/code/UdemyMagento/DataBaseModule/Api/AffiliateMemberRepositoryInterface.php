<?php

namespace UdemyMagento\DataBaseModule\Api;


use Magento\Framework\Api\Search\SearchCriteriaInterface;
use UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberInterface;

interface AffiliateMemberRepositoryInterface
{
    /**
     * @return AffiliateMemberInterface[]
     */
    public function getList();

    /**
     * @param int $id
     * @return AffiliateMemberInterface
     */
    public function getById($id);

    /**
     * @param AffiliateMemberInterface $affiliateMember
     * @return AffiliateMemberInterface
     */
    public function update(AffiliateMemberInterface $affiliateMember);

    /**
     * @param AffiliateMemberInterface $affiliateMember
     * @return AffiliateMemberInterface
     */
    public function create(AffiliateMemberInterface $affiliateMember);

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById($id);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \UdemyMagento\DataBaseModule\Api\Data\AffiliateMemberSearchResultInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria);

}
