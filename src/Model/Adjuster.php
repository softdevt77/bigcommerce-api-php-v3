<?php
/**
 * Adjuster
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
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

/**
 * Adjuster Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Adjuster implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Adjuster';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adjuster' => 'string',
        'adjuster_value' => 'float'
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
        'adjuster' => 'adjuster',
        'adjuster_value' => 'adjuster_value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'adjuster' => 'setAdjuster',
        'adjuster_value' => 'setAdjusterValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'adjuster' => 'getAdjuster',
        'adjuster_value' => 'getAdjusterValue'
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

    const ADJUSTER_RELATIVE = 'relative';
    const ADJUSTER_PERCENTAGE = 'percentage';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAdjusterAllowableValues()
    {
        return [
            self::ADJUSTER_RELATIVE,
            self::ADJUSTER_PERCENTAGE,
        ];
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
    public function __construct(array $data = null)
    {
        $this->container['adjuster'] = isset($data['adjuster']) ? $data['adjuster'] : null;
        $this->container['adjuster_value'] = isset($data['adjuster_value']) ? $data['adjuster_value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["relative", "percentage"];
        if (!in_array($this->container['adjuster'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'adjuster', must be one of #{allowed_values}.";
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
        $allowed_values = ["relative", "percentage"];
        if (!in_array($this->container['adjuster'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets adjuster
     * @return string
     */
    public function getAdjuster()
    {
        return $this->container['adjuster'];
    }

    /**
     * Sets adjuster
     * @param string $adjuster The type of adjuster for either the price or the weight of the variant, when the modifier value is selected on the storefront.
     * @return $this
     */
    public function setAdjuster($adjuster)
    {
        $allowed_values = array('relative', 'percentage');
        if (!is_null($adjuster) && (!in_array($adjuster, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'adjuster', must be one of 'relative', 'percentage'");
        }
        $this->container['adjuster'] = $adjuster;

        return $this;
    }

    /**
     * Gets adjuster_value
     * @return float
     */
    public function getAdjusterValue()
    {
        return $this->container['adjuster_value'];
    }

    /**
     * Sets adjuster_value
     * @param float $adjuster_value The numeric amount by which the adjuster will change either the price or the weight of the variant, when the modifier value is selected on the storefront.
     * @return $this
     */
    public function setAdjusterValue($adjuster_value)
    {
        $this->container['adjuster_value'] = $adjuster_value;

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


