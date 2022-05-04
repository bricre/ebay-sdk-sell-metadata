<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the attributes of an Extended Producer Responsibility
 * policy.
 */
class ExtendedProducerResponsibility extends AbstractModel
{
    /**
     * An indication of whether the attribute can be enabled for listing variations.<br
     * /><br />If the value is <code>true</code>, the attribute may be specified at the
     * variation level.
     *
     * @var bool
     */
    public $enabledForVariations = null;

    /**
     * The name of the attribute included in the policy. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ExtendedProducerResponsibilityEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $name = null;

    /**
     * The usage guidelines for the attribute, in the specified marketplace. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:GenericUsageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $usage = null;
}
