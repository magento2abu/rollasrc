<?php

namespace Mabu\Shopfinder\Api\Data;


interface ShopSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get Shop Complete list.
     *
     * @return \Mabu\Shopfinder\Api\Data\ShopInterface[]
     */
    public function getItems();

    /**
     * Set Shop Complete list.
     *
     * @param \Mabu\Shopfinder\Api\Data\ShopInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}