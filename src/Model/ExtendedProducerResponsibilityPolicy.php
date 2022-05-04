<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the Extended Producer Responsibility policy.
 */
class ExtendedProducerResponsibilityPolicy extends AbstractModel
{
    /**
     * The unique identifier for the category under which the policy applies.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * The unique identifier for the category tree under which the policy applies.
     *
     * @var string
     */
    public $categoryTreeId = null;

    /**
     * The details regarding the attributes included in the policy, such as their usage
     * guidelines and whether they can be specified at the listing variation level.
     *
     * @var \Ebay\Sell\Metadata\Model\ExtendedProducerResponsibility[]
     */
    public $supportedAttributes = null;
}
