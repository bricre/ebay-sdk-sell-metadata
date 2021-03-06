<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel;

class ItemConditionPolicy extends AbstractModel
{
    /**
     * The category ID to which the item-condition policy applies.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * A value that indicates the root node of the category tree used for the response
     * set. Each marketplace is based on a category tree whose root node is indicated
     * by this unique category ID value. All category policy information returned by
     * this call pertains to the categories included below this root node of the tree.
     *   <br><br>A <i>category tree</i> is a hierarchical framework of eBay categories
     * that begins at the root node of the tree and extends to include all the child
     * nodes in the tree. Each child node in the tree is an eBay category that is
     * represented by a unique <b>categoryId</b> value. Within a category tree, the
     * root node has no parent node and <i>leaf nodes</i> are nodes that have no child
     * nodes.
     *
     * @var string
     */
    public $categoryTreeId = null;

    /**
     * This flag denotes whether or not you must list the item condition in a listing
     * for the specified category. If set to <code>true</code>, you must specify an
     * item condition for the associated category.
     *
     * @var bool
     */
    public $itemConditionRequired = null;

    /**
     * The item-condition values allowed in the category.<br /><br /><span
     * class="tablenote"><b>Note:</b> The ‘Seller Refurbished’ item condition
     * (condition ID 2500) has been replaced by the 'Excellent - Refurbished', 'Very
     * Good - Refurbished', and 'Good - Refurbished' item conditions in a select number
     * of eBay marketplaces and categories. See the <a
     * href="/api-docs/sell/static/metadata/condition-id-values.html#Category "
     * target="_blank "> eBay Refurbished Program - Category and marketplace
     * support</a> topic for more details.<br/><br/>Similar to the ‘Certified
     * Refurbished’ item condition (condition ID 2000), a seller’s OAuth user token
     * will have to be used instead of an OAuth application token, since each seller
     * must  go through an application and qualification process before using any of
     * these new refurbished item conditions in supported categories. If a seller is
     * not qualified to use the new refurbished item conditions, these item condition
     * values will not be returned by <b>getItemConditionPolicies</b>.</span>.
     *
     * @var \Ebay\Sell\Metadata\Model\ItemCondition[]
     */
    public $itemConditions = null;
}
