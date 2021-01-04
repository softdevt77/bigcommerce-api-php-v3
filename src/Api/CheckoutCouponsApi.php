<?php
/**
 * CheckoutCouponsApi
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

namespace BigCommerce\Api\v3\Api;

use \BigCommerce\Api\v3\Configuration;
use \BigCommerce\Api\v3\ApiClient;
use \BigCommerce\Api\v3\ApiException;
use \BigCommerce\Api\v3\ObjectSerializer;

class CheckoutCouponsApi
{

    /**
     * API Client
     *
     * @var \BigCommerce\Api\v3\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BigCommerce\Api\v3\ApiClient $apiClient The api client to use
     */
    public function __construct(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
    * Get API client
    *
    * @return \BigCommerce\Api\v3\ApiClient get the API client
    */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
    * Set the API client
    *
    * @param \BigCommerce\Api\v3\ApiClient $apiClient set the API client
    *
    * @return CheckoutCouponsApi
    */
    public function setApiClient(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkoutsCouponsByCheckoutIdAndCouponCodeDelete
     * Delete Checkout Coupon
     *
     *
     * @param string $checkout_id Id of the Checkout (required)
     * @param string $coupon_code The actual couponCode, not the couponId. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\InlineResponse200
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function checkoutsCouponsByCheckoutIdAndCouponCodeDelete($checkout_id, $coupon_code, array $params = [])
    {
        list($response) = $this->checkoutsCouponsByCheckoutIdAndCouponCodeDeleteWithHttpInfo($checkout_id, $coupon_code, $params);
        return $response;
    }


    /**
     * Operation checkoutsCouponsByCheckoutIdAndCouponCodeDeleteWithHttpInfo
     *
     * @see self::checkoutsCouponsByCheckoutIdAndCouponCodeDelete()
     * @param string $checkout_id Id of the Checkout (required)
     * @param string $coupon_code The actual couponCode, not the couponId. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutsCouponsByCheckoutIdAndCouponCodeDeleteWithHttpInfo($checkout_id, $coupon_code, array $params = [])
    {
        
        // verify the required parameter 'checkout_id' is set
        if (!isset($checkout_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $checkout_id when calling checkoutsCouponsByCheckoutIdAndCouponCodeDelete');
        }
        
        // verify the required parameter 'accept' is set
        
        // verify the required parameter 'content_type' is set
        
        // verify the required parameter 'coupon_code' is set
        if (!isset($coupon_code)) {
            throw new \InvalidArgumentException('Missing the required parameter $coupon_code when calling checkoutsCouponsByCheckoutIdAndCouponCodeDelete');
        }
        

        // parse inputs
        $resourcePath = "/checkouts/{checkoutId}/coupons/{couponCode}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
        // header params

        if (isset($accept)) {
            $headerParams['Accept'] = $this->apiClient->getSerializer()->toHeaderValue($accept);
        }
        // header params

        if (isset($content_type)) {
            $headerParams['Content-Type'] = $this->apiClient->getSerializer()->toHeaderValue($content_type);
        }

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($checkout_id)) {
            $resourcePath = str_replace(
                "{" . "checkoutId" . "}",
                $this->apiClient->getSerializer()->toPathValue($checkout_id),
                $resourcePath
            );
        }
        // path params


        if (isset($coupon_code)) {
            $resourcePath = str_replace(
                "{" . "couponCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($coupon_code),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Auth-Token'] = $apiKey;
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\InlineResponse200',
                '/checkouts/{checkoutId}/coupons/{couponCode}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\InlineResponse200', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation checkoutsCouponsByCheckoutIdPost
     * Add Coupon to Checkout
     *
     *
     * @param string $checkout_id Id of the Checkout (required)
     * @param \BigCommerce\Api\v3\Model\CouponCodeRequest $body  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\InlineResponse200
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function checkoutsCouponsByCheckoutIdPost($checkout_id, $body, array $params = [])
    {
        list($response) = $this->checkoutsCouponsByCheckoutIdPostWithHttpInfo($checkout_id,  $body, $params);
        return $response;
    }


    /**
     * Operation checkoutsCouponsByCheckoutIdPostWithHttpInfo
     *
     * @see self::checkoutsCouponsByCheckoutIdPost()
     * @param string $checkout_id Id of the Checkout (required)
     * @param \BigCommerce\Api\v3\Model\CouponCodeRequest $body  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutsCouponsByCheckoutIdPostWithHttpInfo($checkout_id,  $body, array $params = [])
    {
        
        // verify the required parameter 'checkout_id' is set
        if (!isset($checkout_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $checkout_id when calling checkoutsCouponsByCheckoutIdPost');
        }
        
        // verify the required parameter 'accept' is set
        
        // verify the required parameter 'content_type' is set
        
        // verify the required parameter 'body' is set
        if (!isset($body)) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling checkoutsCouponsByCheckoutIdPost');
        }
        

        // parse inputs
        $resourcePath = "/checkouts/{checkoutId}/coupons";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
        // header params

        if (isset($accept)) {
            $headerParams['Accept'] = $this->apiClient->getSerializer()->toHeaderValue($accept);
        }
        // header params

        if (isset($content_type)) {
            $headerParams['Content-Type'] = $this->apiClient->getSerializer()->toHeaderValue($content_type);
        }

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($checkout_id)) {
            $resourcePath = str_replace(
                "{" . "checkoutId" . "}",
                $this->apiClient->getSerializer()->toPathValue($checkout_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
        $_tempBody = $body;
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Auth-Token'] = $apiKey;
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\InlineResponse200',
                '/checkouts/{checkoutId}/coupons'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\InlineResponse200', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
