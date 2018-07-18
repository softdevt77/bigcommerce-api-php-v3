<?php
/**
 * Metafield
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
 * Metafield Class Doc Comment
 *
 * @category    Class */
 // @description Allows app partners to write custom data to various resources in the API.
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Metafield implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Metafield';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'permission_set' => 'string',
        'namespace' => 'string',
        'key' => 'string',
        'value' => 'string',
        'description' => 'string',
        'resource_type' => 'string',
        'resource_id' => 'int',
        'id' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
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
        'permission_set' => 'permission_set',
        'namespace' => 'namespace',
        'key' => 'key',
        'value' => 'value',
        'description' => 'description',
        'resource_type' => 'resource_type',
        'resource_id' => 'resource_id',
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'permission_set' => 'setPermissionSet',
        'namespace' => 'setNamespace',
        'key' => 'setKey',
        'value' => 'setValue',
        'description' => 'setDescription',
        'resource_type' => 'setResourceType',
        'resource_id' => 'setResourceId',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'permission_set' => 'getPermissionSet',
        'namespace' => 'getNamespace',
        'key' => 'getKey',
        'value' => 'getValue',
        'description' => 'getDescription',
        'resource_type' => 'getResourceType',
        'resource_id' => 'getResourceId',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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

    const PERMISSION_SET_APP_ONLY = 'app_only';
    const PERMISSION_SET_READ = 'read';
    const PERMISSION_SET_WRITE = 'write';
    const RESOURCE_TYPE_CATEGORY = 'category';
    const RESOURCE_TYPE_BRAND = 'brand';
    const RESOURCE_TYPE_PRODUCT = 'product';
    const RESOURCE_TYPE_VARIANT = 'variant';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPermissionSetAllowableValues()
    {
        return [
            self::PERMISSION_SET_APP_ONLY,
            self::PERMISSION_SET_READ,
            self::PERMISSION_SET_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_CATEGORY,
            self::RESOURCE_TYPE_BRAND,
            self::RESOURCE_TYPE_PRODUCT,
            self::RESOURCE_TYPE_VARIANT,
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
        $this->container['permission_set'] = isset($data['permission_set']) ? $data['permission_set'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['resource_type'] = isset($data['resource_type']) ? $data['resource_type'] : null;
        $this->container['resource_id'] = isset($data['resource_id']) ? $data['resource_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["app_only", "read", "write"];
        if (!in_array($this->container['permission_set'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'permission_set', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['namespace']) && (strlen($this->container['namespace']) > 64)) {
            $invalid_properties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['namespace']) && (strlen($this->container['namespace']) < 1)) {
            $invalid_properties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['key']) && (strlen($this->container['key']) > 64)) {
            $invalid_properties[] = "invalid value for 'key', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['key']) && (strlen($this->container['key']) < 1)) {
            $invalid_properties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['value']) && (strlen($this->container['value']) > 65535)) {
            $invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['value']) && (strlen($this->container['value']) < 1)) {
            $invalid_properties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (strlen($this->container['description']) > 255)) {
            $invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (strlen($this->container['description']) < 0)) {
            $invalid_properties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        $allowed_values = ["category", "brand", "product", "variant"];
        if (!in_array($this->container['resource_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'resource_type', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['resource_id']) && ($this->container['resource_id'] > 10000000000)) {
            $invalid_properties[] = "invalid value for 'resource_id', must be smaller than or equal to 10000000000.";
        }

        if (!is_null($this->container['resource_id']) && ($this->container['resource_id'] < 0)) {
            $invalid_properties[] = "invalid value for 'resource_id', must be bigger than or equal to 0.";
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
        $allowed_values = ["app_only", "read", "write"];
        if (!in_array($this->container['permission_set'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['namespace']) > 64) {
            return false;
        }
        if (strlen($this->container['namespace']) < 1) {
            return false;
        }
        if (strlen($this->container['key']) > 64) {
            return false;
        }
        if (strlen($this->container['key']) < 1) {
            return false;
        }
        if (strlen($this->container['value']) > 65535) {
            return false;
        }
        if (strlen($this->container['value']) < 1) {
            return false;
        }
        if (strlen($this->container['description']) > 255) {
            return false;
        }
        if (strlen($this->container['description']) < 0) {
            return false;
        }
        $allowed_values = ["category", "brand", "product", "variant"];
        if (!in_array($this->container['resource_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['resource_id'] > 10000000000) {
            return false;
        }
        if ($this->container['resource_id'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets permission_set
     * @return string
     */
    public function getPermissionSet()
    {
        return $this->container['permission_set'];
    }

    /**
     * Sets permission_set
     * @param string $permission_set Determines whether the field is completely private to the app that owns the field (`app_only`), or visible to other API consumers (`read`), or completely open for reading and writing to other apps (`write`).
     * @return $this
     */
    public function setPermissionSet($permission_set)
    {
        $allowed_values = array('app_only', 'read', 'write');
        if (!is_null($permission_set) && (!in_array($permission_set, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'permission_set', must be one of 'app_only', 'read', 'write'");
        }
        $this->container['permission_set'] = $permission_set;

        return $this;
    }

    /**
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     * @param string $namespace Namespace for the metafield, for organizational purposes.
     * @return $this
     */
    public function setNamespace($namespace)
    {
        if (!is_null($namespace) && (strlen($namespace) > 64)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling Metafield., must be smaller than or equal to 64.');
        }
        if (!is_null($namespace) && (strlen($namespace) < 1)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling Metafield., must be bigger than or equal to 1.');
        }

        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key The name of the field, for example: `location_id`, `color`.
     * @return $this
     */
    public function setKey($key)
    {
        if (!is_null($key) && (strlen($key) > 64)) {
            throw new \InvalidArgumentException('invalid length for $key when calling Metafield., must be smaller than or equal to 64.');
        }
        if (!is_null($key) && (strlen($key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $key when calling Metafield., must be bigger than or equal to 1.');
        }

        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value The value of the field, for example: `1`, `blue`.
     * @return $this
     */
    public function setValue($value)
    {
        if (!is_null($value) && (strlen($value) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Metafield., must be smaller than or equal to 65535.');
        }
        if (!is_null($value) && (strlen($value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Metafield., must be bigger than or equal to 1.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description for the metafields.
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Metafield., must be smaller than or equal to 255.');
        }
        if (!is_null($description) && (strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Metafield., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets resource_type
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     * @param string $resource_type The type of resource with which the metafield is associated.
     * @return $this
     */
    public function setResourceType($resource_type)
    {
        $allowed_values = array('category', 'brand', 'product', 'variant');
        if (!is_null($resource_type) && (!in_array($resource_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'resource_type', must be one of 'category', 'brand', 'product', 'variant'");
        }
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets resource_id
     * @return int
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     * @param int $resource_id The unique identifier for the resource with which the metafield is associated.
     * @return $this
     */
    public function setResourceId($resource_id)
    {

        if (!is_null($resource_id) && ($resource_id > 10000000000)) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling Metafield., must be smaller than or equal to 10000000000.');
        }
        if (!is_null($resource_id) && ($resource_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling Metafield., must be bigger than or equal to 0.');
        }

        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique identifier for the metafields.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at Date and time of the metafield's creation.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at Date and time when the metafield was last updated.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


