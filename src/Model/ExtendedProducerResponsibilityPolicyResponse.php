<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the response fields for the
 * <b>getExtendedProducerResponsibilityPolicies</b> method.
 */
class ExtendedProducerResponsibilityPolicyResponse extends AbstractModel
{
    /**
     * An array of response fields detailing the Extended Producer Responsibility
     * policies supported for the specified marketplace.
     *
     * @var \Ebay\Sell\Metadata\Model\ExtendedProducerResponsibilityPolicy[]
     */
    public $extendedProducerResponsibilities = null;

    /**
     * A collection of warnings generated for the request.
     *
     * @var \Ebay\Sell\Metadata\Model\Error[]
     */
    public $warnings = null;
}
