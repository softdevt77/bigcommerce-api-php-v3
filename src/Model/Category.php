<?php
/**
 * Category
 *
 * @package  BigCommerce\Api\v3
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

class Category extends CategoryBase implements ArrayAccess
{
    const DISCRIMINATOR   = null;
    const MAX_NAME_LENGTH = 75;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent_id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'views' => 'int',
        'sort_order' => 'int',
        'page_title' => 'string',
        'search_keywords' => 'string',
        'meta_keywords' => 'string[]',
        'meta_description' => 'string',
        'layout_file' => 'string',
        'is_visible' => 'bool',
        'default_product_sort' => 'string',
        'image_url' => 'string',
        'custom_url' => '\BigCommerce\Api\v3\Model\CustomUrlCategory',
        'id' => 'int',
        'category_id' => 'int'
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
        'parent_id' => 'parent_id',
        'name' => 'name',
        'description' => 'description',
        'views' => 'views',
        'sort_order' => 'sort_order',
        'page_title' => 'page_title',
        'search_keywords' => 'search_keywords',
        'meta_keywords' => 'meta_keywords',
        'meta_description' => 'meta_description',
        'layout_file' => 'layout_file',
        'is_visible' => 'is_visible',
        'default_product_sort' => 'default_product_sort',
        'image_url' => 'image_url',
        'custom_url' => 'custom_url',
        'id' => 'id',
        'category_id' => 'category_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'parent_id' => 'setParentId',
        'name' => 'setName',
        'description' => 'setDescription',
        'views' => 'setViews',
        'sort_order' => 'setSortOrder',
        'page_title' => 'setPageTitle',
        'search_keywords' => 'setSearchKeywords',
        'meta_keywords' => 'setMetaKeywords',
        'meta_description' => 'setMetaDescription',
        'layout_file' => 'setLayoutFile',
        'is_visible' => 'setIsVisible',
        'default_product_sort' => 'setDefaultProductSort',
        'image_url' => 'setImageUrl',
        'custom_url' => 'setCustomUrl',
        'id' => 'setId',
        'category_id' => 'setCategoryId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'parent_id' => 'getParentId',
        'name' => 'getName',
        'description' => 'getDescription',
        'views' => 'getViews',
        'sort_order' => 'getSortOrder',
        'page_title' => 'getPageTitle',
        'search_keywords' => 'getSearchKeywords',
        'meta_keywords' => 'getMetaKeywords',
        'meta_description' => 'getMetaDescription',
        'layout_file' => 'getLayoutFile',
        'is_visible' => 'getIsVisible',
        'default_product_sort' => 'getDefaultProductSort',
        'image_url' => 'getImageUrl',
        'custom_url' => 'getCustomUrl',
        'id' => 'getId',
        'category_id' => 'getCategoryId'
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

    const DEFAULT_PRODUCT_SORT_USE_STORE_SETTINGS = 'use_store_settings';
    const DEFAULT_PRODUCT_SORT_FEATURED = 'featured';
    const DEFAULT_PRODUCT_SORT_NEWEST = 'newest';
    const DEFAULT_PRODUCT_SORT_BEST_SELLING = 'best_selling';
    const DEFAULT_PRODUCT_SORT_ALPHA_ASC = 'alpha_asc';
    const DEFAULT_PRODUCT_SORT_ALPHA_DESC = 'alpha_desc';
    const DEFAULT_PRODUCT_SORT_AVG_CUSTOMER_REVIEW = 'avg_customer_review';
    const DEFAULT_PRODUCT_SORT_PRICE_ASC = 'price_asc';
    const DEFAULT_PRODUCT_SORT_PRICE_DESC = 'price_desc';



    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDefaultProductSortAllowableValues()
    {
        return [
            self::DEFAULT_PRODUCT_SORT_USE_STORE_SETTINGS,
            self::DEFAULT_PRODUCT_SORT_FEATURED,
            self::DEFAULT_PRODUCT_SORT_NEWEST,
            self::DEFAULT_PRODUCT_SORT_BEST_SELLING,
            self::DEFAULT_PRODUCT_SORT_ALPHA_ASC,
            self::DEFAULT_PRODUCT_SORT_ALPHA_DESC,
            self::DEFAULT_PRODUCT_SORT_AVG_CUSTOMER_REVIEW,
            self::DEFAULT_PRODUCT_SORT_PRICE_ASC,
            self::DEFAULT_PRODUCT_SORT_PRICE_DESC,
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
    public function __construct(array $data = [])
    {
        $this->container['parent_id'] = array_key_exists('parent_id', $data) ? $data['parent_id'] : null;
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : null;
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : null;
        $this->container['views'] = array_key_exists('views', $data) ? $data['views'] : null;
        $this->container['sort_order'] = array_key_exists('sort_order', $data) ? $data['sort_order'] : null;
        $this->container['page_title'] = array_key_exists('page_title', $data) ? $data['page_title'] : null;
        $this->container['search_keywords'] = array_key_exists('search_keywords', $data) ? $data['search_keywords'] : null;
        $this->container['meta_keywords'] = array_key_exists('meta_keywords', $data) ? $data['meta_keywords'] : null;
        $this->container['meta_description'] = array_key_exists('meta_description', $data) ? $data['meta_description'] : null;
        $this->container['layout_file'] = array_key_exists('layout_file', $data) ? $data['layout_file'] : null;
        $this->container['is_visible'] = array_key_exists('is_visible', $data) ? $data['is_visible'] : null;
        $this->container['default_product_sort'] = array_key_exists('default_product_sort', $data) ? $data['default_product_sort'] : null;
        $this->container['image_url'] = array_key_exists('image_url', $data) ? $data['image_url'] : null;
        $this->container['custom_url'] = array_key_exists('custom_url', $data) ? $data['custom_url'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['category_id'] = array_key_exists('category_id', $data) ? $data['category_id'] : null;
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
        if (strlen($this->container['name']) > 50) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }
        if (strlen($this->container['name']) < 1) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['sort_order'] > 2147483647) {
            $invalid_properties[] = "invalid value for 'sort_order', must be smaller than or equal to 2147483647.";
        }
        if ($this->container['sort_order'] < -2147483648) {
            $invalid_properties[] = "invalid value for 'sort_order', must be bigger than or equal to -2147483648.";
        }
        if (strlen($this->container['page_title']) > 255) {
            $invalid_properties[] = "invalid value for 'page_title', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['page_title']) < 0) {
            $invalid_properties[] = "invalid value for 'page_title', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['search_keywords']) > 65535) {
            $invalid_properties[] = "invalid value for 'search_keywords', the character length must be smaller than or equal to 65535.";
        }
        if (strlen($this->container['search_keywords']) < 0) {
            $invalid_properties[] = "invalid value for 'search_keywords', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['meta_description']) > 65535) {
            $invalid_properties[] = "invalid value for 'meta_description', the character length must be smaller than or equal to 65535.";
        }
        if (strlen($this->container['meta_description']) < 0) {
            $invalid_properties[] = "invalid value for 'meta_description', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['layout_file']) > 500) {
            $invalid_properties[] = "invalid value for 'layout_file', the character length must be smaller than or equal to 500.";
        }
        if (strlen($this->container['layout_file']) < 0) {
            $invalid_properties[] = "invalid value for 'layout_file', the character length must be bigger than or equal to 0.";
        }
        $allowed_values = ["use_store_settings", "featured", "newest", "best_selling", "alpha_asc", "alpha_desc", "avg_customer_review", "price_asc", "price_desc"];
        if (!in_array($this->container['default_product_sort'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'default_product_sort', must be one of #{allowed_values}.";
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
        if (strlen($this->container['name']) > 50) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        if ($this->container['sort_order'] > 2147483647) {
            return false;
        }
        if ($this->container['sort_order'] < -2147483648) {
            return false;
        }
        if (strlen($this->container['page_title']) > 255) {
            return false;
        }
        if (strlen($this->container['page_title']) < 0) {
            return false;
        }
        if (strlen($this->container['search_keywords']) > 65535) {
            return false;
        }
        if (strlen($this->container['search_keywords']) < 0) {
            return false;
        }
        if (strlen($this->container['meta_description']) > 65535) {
            return false;
        }
        if (strlen($this->container['meta_description']) < 0) {
            return false;
        }
        if (strlen($this->container['layout_file']) > 500) {
            return false;
        }
        if (strlen($this->container['layout_file']) < 0) {
            return false;
        }
        $allowed_values = ["use_store_settings", "featured", "newest", "best_selling", "alpha_asc", "alpha_desc", "avg_customer_review", "price_asc", "price_desc"];
        if (!in_array($this->container['default_product_sort'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id The unique numeric ID of the category's parent. This field controls where the category sits in the tree of categories that organize the catalog.
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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
     * @param string $name The name displayed for the category. Name is unique with respect to the category's siblings.
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) > self::MAX_NAME_LENGTH) {
            throw new \InvalidArgumentException(sprintf('invalid length for $name when calling Category., must be smaller than or equal to %d.', self::MAX_NAME_LENGTH));
        }
        if (strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling Category., must be bigger than or equal to 1.');
        }
        $this->container['name'] = $name;

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
     * @param string $description The product description, which can include HTML formatting.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets views
     * @return int
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     * @param int $views Number of views the category has on the storefront.
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order Priority this category will be given when included in the menu and category pages. The lower the number, the closer to the top of the results the category will be.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if ($sort_order > 2147483647) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling Category., must be smaller than or equal to 2147483647.');
        }
        if ($sort_order < -2147483648) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling Category., must be bigger than or equal to -2147483648.');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets page_title
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['page_title'];
    }

    /**
     * Sets page_title
     * @param string $page_title Custom title for the category page. If not defined, the category name will be used as the meta title.
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        if (strlen($page_title) > 255) {
            throw new \InvalidArgumentException('invalid length for $page_title when calling Category., must be smaller than or equal to 255.');
        }
        if (strlen($page_title) < 0) {
            throw new \InvalidArgumentException('invalid length for $page_title when calling Category., must be bigger than or equal to 0.');
        }
        $this->container['page_title'] = $page_title;

        return $this;
    }

    /**
     * Gets search_keywords
     * @return string
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     * @param string $search_keywords A comma-separated list of keywords that can be used to locate the category when searching the store.
     * @return $this
     */
    public function setSearchKeywords($search_keywords)
    {
        if (strlen($search_keywords) > 65535) {
            throw new \InvalidArgumentException('invalid length for $search_keywords when calling Category., must be smaller than or equal to 65535.');
        }
        if (strlen($search_keywords) < 0) {
            throw new \InvalidArgumentException('invalid length for $search_keywords when calling Category., must be bigger than or equal to 0.');
        }
        $this->container['search_keywords'] = $search_keywords;

        return $this;
    }

    /**
     * Gets meta_keywords
     * @return string[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     * @param string[] $meta_keywords Custom meta keywords for the category page. If not defined, the store's default keywords will be used. Must post as an array like: [\"awesome\",\"sauce\"].
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets meta_description
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     * @param string $meta_description Custom meta description for the category page. If not defined, the store's default meta description will be used.
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        if (strlen($meta_description) > 65535) {
            throw new \InvalidArgumentException('invalid length for $meta_description when calling Category., must be smaller than or equal to 65535.');
        }
        if (strlen($meta_description) < 0) {
            throw new \InvalidArgumentException('invalid length for $meta_description when calling Category., must be bigger than or equal to 0.');
        }
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets layout_file
     * @return string
     */
    public function getLayoutFile()
    {
        return $this->container['layout_file'];
    }

    /**
     * Sets layout_file
     * @param string $layout_file The layout template file used to render this category.
     * @return $this
     */
    public function setLayoutFile($layout_file)
    {
        if (strlen($layout_file) > 500) {
            throw new \InvalidArgumentException('invalid length for $layout_file when calling Category., must be smaller than or equal to 500.');
        }
        if (strlen($layout_file) < 0) {
            throw new \InvalidArgumentException('invalid length for $layout_file when calling Category., must be bigger than or equal to 0.');
        }
        $this->container['layout_file'] = $layout_file;

        return $this;
    }

    /**
     * Gets is_visible
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     * @param bool $is_visible Flag to determine whether the product should be displayed to customers browsing the store. If `true`, the category will be displayed. If `false`, the category will be hidden from view.
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }

    /**
     * Gets default_product_sort
     * @return string
     */
    public function getDefaultProductSort()
    {
        return $this->container['default_product_sort'];
    }

    /**
     * Sets default_product_sort
     * @param string $default_product_sort Determines how the products are sorted on category page load.
     * @return $this
     */
    public function setDefaultProductSort($default_product_sort)
    {
        $allowed_values = ['use_store_settings', 'featured', 'newest', 'best_selling', 'alpha_asc', 'alpha_desc', 'avg_customer_review', 'price_asc', 'price_desc'];
        if (!is_null($default_product_sort) && (!in_array($default_product_sort, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'default_product_sort', must be one of 'use_store_settings', 'featured', 'newest', 'best_selling', 'alpha_asc', 'alpha_desc', 'avg_customer_review', 'price_asc', 'price_desc'");
        }
        $this->container['default_product_sort'] = $default_product_sort;

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
     * @param string $image_url Image URL used for this category on the storefront. Images can be uploaded via form file post to `/categories/{categoryId}/image`, or by providing a publicly accessible URL in this field.
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets custom_url
     * @return \BigCommerce\Api\v3\Model\CustomUrlCategory
     */
    public function getCustomUrl()
    {
        return $this->container['custom_url'];
    }

    /**
     * Sets custom_url
     * @param \BigCommerce\Api\v3\Model\CustomUrlCategory $custom_url
     * @return $this
     */
    public function setCustomUrl($custom_url)
    {
        $this->container['custom_url'] = $custom_url;

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
	 * Gets category id
	 * @return int
	 */
	public function getCategoryId()
	{
		return $this->container['category_id'];
	}

	/**
	 * Sets category id
	 * @param int $id The unique numeric ID of the category; increments sequentially.
	 * @return $this
	 */
	public function setCategoryId($id)
	{
		$this->container['category_id'] = $id;

		return $this;
	}

    /**
     * Sets id
     * @param int $id The unique numeric ID of the category; increments sequentially.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


