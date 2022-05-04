<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel;

class NegotiatedPricePolicyResponse extends AbstractModel
{
    /**
     * A list of category IDs and the policies related to negotiated-price items for
     * each of the listed categories.
     *
     * @var \Ebay\Sell\Metadata\Model\NegotiatedPricePolicy[]
     */
    public $negotiatedPricePolicies = null;

    /**
     * A list of the warnings that were generated as a result of the request. This
     * field is not returned if no warnings were generated by the request.
     *
     * @var \Ebay\Sell\Metadata\Model\Error[]
     */
    public $warnings = null;
}