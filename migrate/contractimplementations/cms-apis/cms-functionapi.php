<?php

namespace PoP\PostTags\WP;

use PoP\PostTags\Facades\PostTagTypeAPIFacade;

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
        $postTagTypeAPI = PostTagTypeAPIFacade::getInstance();
        return $postTagTypeAPI->getPostTagTaxonomyName();
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
