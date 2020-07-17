<?php

namespace PoP\PostTags\WP;

class FunctionAPI extends \PoP\Tags\WP\AbstractFunctionAPI implements \PoP\PostTags\FunctionAPI
{
    public function __construct()
    {
        \PoP\PostTags\FunctionAPIFactory::setInstance($this);
    }

    /**
     * Implement this function by the actual service
     *
     * @return string
     */
    protected function getTaxonomyName(): string
    {
        return 'post_tag';
    }
    /**
     * Implement this function by the actual service
     *
     * @return string
     */
    protected function getTagBaseOption(): string
    {
        return 'tag_base';
    }
}

/**
 * Initialize
 */
new FunctionAPI();
