<?php

namespace Mabu\Shopfinder\Model\ResourceModel\Shop;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'shop_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Mabu\Shopfinder\Model\Shop', 'Mabu\Shopfinder\Model\ResourceModel\Shop');
    }
}