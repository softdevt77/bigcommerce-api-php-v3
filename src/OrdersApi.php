<?php
/**
 * OrdersApi
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3;

use \BigCommerce\Api\v3\Configuration;
use \BigCommerce\Api\v3\ApiClient;
use \BigCommerce\Api\v3\ApiException;
use \BigCommerce\Api\v3\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersApi
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
    * @return OrdersApi
    */
    public function setApiClient(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Operation createTransaction
    * 
    *
    * @param int $order_id
    * @param \BigCommerce\Api\v3\Model\TransactionPost $transaction
    * @param array $params = []
    * @return \BigCommerce\Api\v3\Model\TransactionResponse
    * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
    */
    public function createTransaction($order_id, \BigCommerce\Api\v3\Model\TransactionPost $transaction, array $params = [])
    {
        
        // verify the required parameter 'order_id' is set
        if (!isset($order_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling createTransaction');
        }
        // verify the required parameter 'transaction' is set
        if (!isset($transaction)) {
            throw new \InvalidArgumentException('Missing the required parameter $transaction when calling createTransaction');
        }

        // parse inputs
        $resourcePath = "/orders/{order_id}/transactions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
        // path params


        if (isset($order_id)) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($transaction)) {
        $_tempBody = $transaction;
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\TransactionResponse'
            );
            return $this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\TransactionResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\TransactionResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 204:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\NoContent', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\NotFound', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
    * Operation getTransactions
    * 
    *
    * @param int $order_id
    * @param array $params = []
    * @return \BigCommerce\Api\v3\Model\TransactionCollectionResponse
    * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
    */
    public function getTransactions($order_id, array $params = [])
    {
        
        // verify the required parameter 'order_id' is set
        if (!isset($order_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getTransactions');
        }

        // parse inputs
        $resourcePath = "/orders/{order_id}/transactions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
        // path params


        if (isset($order_id)) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
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
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\TransactionCollectionResponse'
            );
            return $this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\TransactionCollectionResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\TransactionCollectionResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 204:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\NoContent', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\NotFound', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
