<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the action to apply to a BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913128(v=msads.100).aspx AdGroupCriterionAction Data Object
     * 
     * @uses ItemAction
     * @uses AdGroupCriterion
     * @used-by ApplyProductPartitionActionsRequest
     */
    final class AdGroupCriterionAction
    {
        /**
         * The action to be applied for the AdGroupCriterion.
         * @var ItemAction
         */
        public $Action;

        /**
         * The BiddableAdGroupCriterion or NegativeAdGroupCriterion, either of which must contain a ProductPartition criterion.
         * @var AdGroupCriterion
         */
        public $AdGroupCriterion;
    }

}
