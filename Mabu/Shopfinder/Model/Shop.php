<?php

namespace Mabu\Shopfinder\Model;

use Mabu\Shopfinder\Api\Data\ShopInterface;

class Shop extends \Magento\Framework\Model\AbstractModel implements ShopInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'mabu_shop';

    /**
     * @var string
     */
    protected $_cacheTag = 'mabu_shop';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'mabu_shop';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Mabu\Shopfinder\Model\ResourceModel\Shop');
    }
    /**
     * Get ShopId.
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->getData(self::SHOP_ID);
    }

    /**
     * Set ShopId.
     */
    public function setShopId($shopId)
    {
        return $this->setData(self::SHOP_ID, $shopId);
    }

    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set Name.
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Identifier.
     *
     * @return varchar
     */
    public function getIdentifier()
    {
        return $this->getData(self::IDENTIFIER);
    }

    /**
     * Set Name.
     */
    public function setIdentifier($identifier)
    {
        return $this->setData(self::IDENTIFIER, $identifier);
    }

    /**
     * Get Image.
     *
     * @return varchar
     */
    public function getImage()
    {
        return $this->getData(self::IMAGE);
    }

    /**
     * Set Image.
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * Get Country Code.
     *
     * @return varchar
     */
    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }
    
    /**
     * Set Country Code.
     */
    public function setCountry($country)
    {
        return $this->setData(self::COUNTRY, $image);
    }
}