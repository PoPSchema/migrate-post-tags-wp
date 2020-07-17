<?php

namespace PoP\PostTags\WP;

class FunctionAPI extends \PoP\Tags\WP\FunctionAPI implements \PoP\PostTags\FunctionAPI
{
    public function __construct()
    {
        \PoP\PostTags\FunctionAPIFactory::setInstance($this);
    }
}

/**
 * Initialize
 */
new FunctionAPI();
