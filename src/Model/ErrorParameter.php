<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Container for a error parameter.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * Name of the entity that threw the error.
     *
     * @var string
     */
    public $name = null;

    /**
     * A description of the error.
     *
     * @var string
     */
    public $value = null;
}
