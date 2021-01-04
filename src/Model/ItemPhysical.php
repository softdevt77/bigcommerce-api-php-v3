<?php
/**
 * ItemPhysical
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * Checkouts
 *
 * Create checkouts from existing carts using BigCommerce checkout logic.
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

class ItemPhysical implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Item Physical';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'double',
        'id' => 'string',
        'variant_id' => 'double',
        'product_id' => 'double',
        'sku' => 'string',
        'name' => 'string',
        'url' => 'string',
        'is_taxable' => 'bool',
        'image_url' => 'string',
        'discounts' => '\BigCommerce\Api\v3\Model\AppliedDiscount[]',
        'coupons' => '\BigCommerce\Api\v3\Model\AppliedCoupon[]',
        'discount_amount' => 'double',
        'coupon_amount' => 'double',
        'list_price' => 'double',
        'sale_price' => 'double',
        'extended_list_price' => 'double',
        'extended_sale_price' => 'double',
        'options' => '\BigCommerce\Api\v3\Model\ProductOption[]',
        'is_require_shipping' => 'bool',
        'gift_wrapping' => '\BigCommerce\Api\v3\Model\GiftWrapping'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'quantity' => 'quantity',
        'id' => 'id',
        'variant_id' => 'variant_id',
        'product_id' => 'product_id',
        'sku' => 'sku',
        'name' => 'name',
        'url' => 'url',
        'is_taxable' => 'is_taxable',
        'image_url' => 'image_url',
        'discounts' => 'discounts',
        'coupons' => 'coupons',
        'discount_amount' => 'discount_amount',
        'coupon_amount' => 'coupon_amount',
        'list_price' => 'list_price',
        'sale_price' => 'sale_price',
        'extended_list_price' => 'extended_list_price',
        'extended_sale_price' => 'extended_sale_price',
        'options' => 'options',
        'is_require_shipping' => 'is_require_shipping',
        'gift_wrapping' => 'gift_wrapping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'id' => 'setId',
        'variant_id' => 'setVariantId',
        'product_id' => 'setProductId',
        'sku' => 'setSku',
        'name' => 'setName',
        'url' => 'setUrl',
        'is_taxable' => 'setIsTaxable',
        'image_url' => 'setImageUrl',
        'discounts' => 'setDiscounts',
        'coupons' => 'setCoupons',
        'discount_amount' => 'setDiscountAmount',
        'coupon_amount' => 'setCouponAmount',
        'list_price' => 'setListPrice',
        'sale_price' => 'setSalePrice',
        'extended_list_price' => 'setExtendedListPrice',
        'extended_sale_price' => 'setExtendedSalePrice',
        'options' => 'setOptions',
        'is_require_shipping' => 'setIsRequireShipping',
        'gift_wrapping' => 'setGiftWrapping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'id' => 'getId',
        'variant_id' => 'getVariantId',
        'product_id' => 'getProductId',
        'sku' => 'getSku',
        'name' => 'getName',
        'url' => 'getUrl',
        'is_taxable' => 'getIsTaxable',
        'image_url' => 'getImageUrl',
        'discounts' => 'getDiscounts',
        'coupons' => 'getCoupons',
        'discount_amount' => 'getDiscountAmount',
        'coupon_amount' => 'getCouponAmount',
        'list_price' => 'getListPrice',
        'sale_price' => 'getSalePrice',
        'extended_list_price' => 'getExtendedListPrice',
        'extended_sale_price' => 'getExtendedSalePrice',
        'options' => 'getOptions',
        'is_require_shipping' => 'getIsRequireShipping',
        'gift_wrapping' => 'getGiftWrapping'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['quantity'] = array_key_exists('quantity', $data) ? $data['quantity'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['variant_id'] = array_key_exists('variant_id', $data) ? $data['variant_id'] : null;
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
        $this->container['sku'] = array_key_exists('sku', $data) ? $data['sku'] : null;
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : null;
        $this->container['url'] = array_key_exists('url', $data) ? $data['url'] : null;
        $this->container['is_taxable'] = array_key_exists('is_taxable', $data) ? $data['is_taxable'] : null;
        $this->container['image_url'] = array_key_exists('image_url', $data) ? $data['image_url'] : null;
        $this->container['discounts'] = array_key_exists('discounts', $data) ? $data['discounts'] : null;
        $this->container['coupons'] = array_key_exists('coupons', $data) ? $data['coupons'] : null;
        $this->container['discount_amount'] = array_key_exists('discount_amount', $data) ? $data['discount_amount'] : null;
        $this->container['coupon_amount'] = array_key_exists('coupon_amount', $data) ? $data['coupon_amount'] : null;
        $this->container['list_price'] = array_key_exists('list_price', $data) ? $data['list_price'] : null;
        $this->container['sale_price'] = array_key_exists('sale_price', $data) ? $data['sale_price'] : null;
        $this->container['extended_list_price'] = array_key_exists('extended_list_price', $data) ? $data['extended_list_price'] : null;
        $this->container['extended_sale_price'] = array_key_exists('extended_sale_price', $data) ? $data['extended_sale_price'] : null;
        $this->container['options'] = array_key_exists('options', $data) ? $data['options'] : null;
        $this->container['is_require_shipping'] = array_key_exists('is_require_shipping', $data) ? $data['is_require_shipping'] : null;
        $this->container['gift_wrapping'] = array_key_exists('gift_wrapping', $data) ? $data['gift_wrapping'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['quantity'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets quantity
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param double $quantity 
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The line-item ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets variant_id
     * @return double
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     * @param double $variant_id 
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets product_id
     * @return double
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param double $product_id 
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku 
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The item's product name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url The product URL.
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets is_taxable
     * @return bool
     */
    public function getIsTaxable()
    {
        return $this->container['is_taxable'];
    }

    /**
     * Sets is_taxable
     * @param bool $is_taxable 
     * @return $this
     */
    public function setIsTaxable($is_taxable)
    {
        $this->container['is_taxable'] = $is_taxable;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url 
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets discounts
     * @return \BigCommerce\Api\v3\Model\AppliedDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     * @param \BigCommerce\Api\v3\Model\AppliedDiscount[] $discounts 
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets coupons
     * @return \BigCommerce\Api\v3\Model\AppliedCoupon[]
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     * @param \BigCommerce\Api\v3\Model\AppliedCoupon[] $coupons 
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets discount_amount
     * @return double
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     * @param double $discount_amount The total value of all discounts applied to this item.
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets coupon_amount
     * @return double
     */
    public function getCouponAmount()
    {
        return $this->container['coupon_amount'];
    }

    /**
     * Sets coupon_amount
     * @param double $coupon_amount The total value of all coupons applied to this item.
     * @return $this
     */
    public function setCouponAmount($coupon_amount)
    {
        $this->container['coupon_amount'] = $coupon_amount;

        return $this;
    }

    /**
     * Gets list_price
     * @return double
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     * @param double $list_price Item's list price, as quoted by the manufacturer/distributor.
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets sale_price
     * @return double
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     * @param double $sale_price Item's price after all discounts are applied. (The final price before tax calculation.)
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets extended_list_price
     * @return double
     */
    public function getExtendedListPrice()
    {
        return $this->container['extended_list_price'];
    }

    /**
     * Sets extended_list_price
     * @param double $extended_list_price Item's list price multiplied by the quantity.
     * @return $this
     */
    public function setExtendedListPrice($extended_list_price)
    {
        $this->container['extended_list_price'] = $extended_list_price;

        return $this;
    }

    /**
     * Gets extended_sale_price
     * @return double
     */
    public function getExtendedSalePrice()
    {
        return $this->container['extended_sale_price'];
    }

    /**
     * Sets extended_sale_price
     * @param double $extended_sale_price Item's sale price multiplied by the quantity.
     * @return $this
     */
    public function setExtendedSalePrice($extended_sale_price)
    {
        $this->container['extended_sale_price'] = $extended_sale_price;

        return $this;
    }

    /**
     * Gets options
     * @return \BigCommerce\Api\v3\Model\ProductOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \BigCommerce\Api\v3\Model\ProductOption[] $options The list of selected options for this product.
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets is_require_shipping
     * @return bool
     */
    public function getIsRequireShipping()
    {
        return $this->container['is_require_shipping'];
    }

    /**
     * Sets is_require_shipping
     * @param bool $is_require_shipping 
     * @return $this
     */
    public function setIsRequireShipping($is_require_shipping)
    {
        $this->container['is_require_shipping'] = $is_require_shipping;

        return $this;
    }

    /**
     * Gets gift_wrapping
     * @return \BigCommerce\Api\v3\Model\GiftWrapping
     */
    public function getGiftWrapping()
    {
        return $this->container['gift_wrapping'];
    }

    /**
     * Sets gift_wrapping
     * @param \BigCommerce\Api\v3\Model\GiftWrapping $gift_wrapping
     * @return $this
     */
    public function setGiftWrapping($gift_wrapping)
    {
        $this->container['gift_wrapping'] = $gift_wrapping;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


