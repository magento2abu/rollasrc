<?php

namespace Mabu\Shopfinder\Api;

interface ShopRepositoryInterface
{
    /**
     * Get shops with filter.
     *
     * @return \Mabu\Shopfinder\Api\Data\ShopSearchResultsInterface
     */
    public function getLists();
}