# MitinSany/CryptoapisApiClient\AddressLatestXRPApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressBalanceXRP()**](AddressLatestXRPApi.md#getAddressBalanceXRP) | **GET** /addresses-latest/xrp/{network}/{address}/balance | Get Address Balance XRP |
| [**listTransactionsByAddressXRP()**](AddressLatestXRPApi.md#listTransactionsByAddressXRP) | **GET** /addresses-latest/xrp/{network}/{address}/transactions | List Transactions by Address XRP |
| [**nextAvailableSequenceXRP()**](AddressLatestXRPApi.md#nextAvailableSequenceXRP) | **GET** /addresses-latest/xrp/{network}/{address}/next-available-sequence | Next Available Sequence XRP |


## `getAddressBalanceXRP()`

```php
getAddressBalanceXRP($network, $address, $context): \MitinSany/CryptoapisApiClient\Model\GetAddressBalanceXRPR
```

Get Address Balance XRP

Through this endpoint the customer can receive the balance of a given address based on confirmed/synced blocks only. In the case where there are any incoming or outgoing unconfirmed transactions for the specific address, they will not be counted or calculated here. Applies only for coins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAddressBalanceXRP($network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestXRPApi->getAddressBalanceXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetAddressBalanceXRPR**](../Model/GetAddressBalanceXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionsByAddressXRP()`

```php
listTransactionsByAddressXRP($network, $address, $context, $limit, $sortingOrder, $startingAfter, $transactionType): \MitinSany/CryptoapisApiClient\Model\ListTransactionsByAddressXRPR
```

List Transactions by Address XRP

This endpoint will list XRP transactions by a attribute `address`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.    {note}Please note that retrieving data will provide the most recent 14 days (1,209,600 seconds) of transactions from the current moment. To access the full historical data, please refer to the Address History APIs.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$address = rA9bXGJcXvZKaWofrRphdJsBWzhyCfH3z; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$sortingOrder = descending; // string | Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.
$transactionType = payment; // string

try {
    $result = $apiInstance->listTransactionsByAddressXRP($network, $address, $context, $limit, $sortingOrder, $startingAfter, $transactionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestXRPApi->listTransactionsByAddressXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **sortingOrder** | **string**| Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp | [optional] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |
| **transactionType** | **string**|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByAddressXRPR**](../Model/ListTransactionsByAddressXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nextAvailableSequenceXRP()`

```php
nextAvailableSequenceXRP($network, $address, $context): \MitinSany/CryptoapisApiClient\Model\NextAvailableSequenceXRPR
```

Next Available Sequence XRP

Through this endpoint customers can get information about the next available sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\" is test networks.
$address = r3ViKjYAk4f7WX2pGeL9ivoS9bEMUhgB8N; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->nextAvailableSequenceXRP($network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestXRPApi->nextAvailableSequenceXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot; is test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\NextAvailableSequenceXRPR**](../Model/NextAvailableSequenceXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
