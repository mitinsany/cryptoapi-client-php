# MitinSany/CryptoapisApiClient\AddressLatestSolanaApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressBalanceSolana()**](AddressLatestSolanaApi.md#getAddressBalanceSolana) | **GET** /addresses-latest/solana/{network}/{address}/balance | Get Address Balance Solana |
| [**listTokensByAddressSolana()**](AddressLatestSolanaApi.md#listTokensByAddressSolana) | **GET** /addresses-latest/solana/{network}/addresses/{address}/tokens | List Tokens By Address Solana |
| [**listTransactionsByAddressSolana()**](AddressLatestSolanaApi.md#listTransactionsByAddressSolana) | **GET** /addresses-latest/solana/{network}/{address}/transactions | List Transactions By Address Solana |


## `getAddressBalanceSolana()`

```php
getAddressBalanceSolana($network, $address, $context): \MitinSany/CryptoapisApiClient\Model\GetAddressBalanceSolanaR
```

Get Address Balance Solana

Through this endpoint the customer can receive the balance of a given address based on confirmed/synced blocks only. In the case where there are any incoming or outgoing unconfirmed transactions for the specific address, they will not be counted or calculated here. Applies only for coins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestSolanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software
$address = DCAKxn5PFNN1mBREPWGdk1RXg5aVH9rPErLfBFEi2Emb; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAddressBalanceSolana($network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestSolanaApi->getAddressBalanceSolana: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetAddressBalanceSolanaR**](../Model/GetAddressBalanceSolanaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTokensByAddressSolana()`

```php
listTokensByAddressSolana($network, $address, $context): \MitinSany/CryptoapisApiClient\Model\ListTokensByAddressSolanaR
```

List Tokens By Address Solana

Through this endpoint customers can obtain token data by providing an attribute - address. The information that can be returned can include the contract address, the token symbol, type and balance.    {note}Please be advised that retrieving Solana (beta) data will provide you with the most recent day of transactions. For access to full historical data, kindly reach out to our support team.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestSolanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software.
$address = 6y5KFgn1Ven8256v27s4KVi3thrqryujBBWwoCbSkGJz; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->listTokensByAddressSolana($network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestSolanaApi->listTokensByAddressSolana: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListTokensByAddressSolanaR**](../Model/ListTokensByAddressSolanaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionsByAddressSolana()`

```php
listTransactionsByAddressSolana($network, $address, $context, $limit, $startingAfter): \MitinSany/CryptoapisApiClient\Model\ListTransactionsByAddressSolanaR
```

List Transactions By Address Solana

This endpoint will list transactions by an attribute address. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.    {note}Please be advised that retrieving Solana data will provide you with the most recent day of transactions. For access to full historical data, kindly reach out to our support team.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestSolanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software.
$address = DUVULQ5bLhvrMwV6BzqPPEQ9RYJ2pVkqwmByBHKNGpVf; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 10; // string | Defines how many items should be returned in the response per page basis.
$startingAfter = 64ca21f92cf5431000105d1a; // string | String representation of the transaction signature to start searching backwards from. If not provided the search starts from the top of the highest max confirmed block

try {
    $result = $apiInstance->listTransactionsByAddressSolana($network, $address, $context, $limit, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestSolanaApi->listTransactionsByAddressSolana: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **string**| Defines how many items should be returned in the response per page basis. | [optional] |
| **startingAfter** | **string**| String representation of the transaction signature to start searching backwards from. If not provided the search starts from the top of the highest max confirmed block | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByAddressSolanaR**](../Model/ListTransactionsByAddressSolanaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
