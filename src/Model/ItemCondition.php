<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * <span class="tablenote"><b>Note: </b>In all eBay marketplaces, Condition ID 2000
 * now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer
 * Refurbished'. To list an item as 'Certified Refurbished', a seller must be
 * pre-qualified by eBay for this feature. Any seller who is not eligible for this
 * feature will be blocked if they try to create a new listing or revise an
 * existing listing with this item condition. Any active listings on any eBay
 * marketplace that had 'Manufacturer Refurbished' as the item condition should
 * have been automatically updated by eBay to the 'Seller Refurbished' item
 * condition (Condition ID 2500). <br><br> Any seller that is interested in
 * eligibility requirements to list with 'Certified Refurbished' should see the <a
 * href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html
 * " target="_blank">Certified refurbished program</a> page in Seller Center.
 * </span>.
 */
class ItemCondition extends AbstractModel
{
    /**
     * The human-readable label for the condition (e.g., "New"). This value is
     * typically localized for each site.  <br><br>Note that the display name can vary
     * by category. For example, the description for condition ID <code>1000</code>
     * could be called "New: with Tags" in one category and "Brand New" in another. For
     * details on condition IDs and descriptions, see <a
     * href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID
     * and name values</a>.
     *
     * @var string
     */
    public $conditionDescription = null;

    /**
     * The ID value of the selected item condition. For information on the supported
     * condition ID values, see <a
     * href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID
     * and name values</a>.
     *
     * @var string
     */
    public $conditionId = null;

    /**
     * The value returned in this field indicates if there are any usage restrictions
     * or requirements for the corresponding item condition in the corresponding
     * category.<br /><br /><span class="tablenote"><b>Note:</b> Currently, the only
     * supported value is 'RESTRICTED', and this field will only be returned for the
     * following conditions: 2000, 2010, 2020, 2030. Sellers must be pre-approved to
     * use any of these item conditions.</span> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:UsageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $usage = null;
}
