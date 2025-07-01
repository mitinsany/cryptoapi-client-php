# MitinSany/CryptoapisApiClient\AddressHistoryEVMApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSyncedAddressTokensTransferEVM()**](AddressHistoryEVMApi.md#getSyncedAddressTokensTransferEVM) | **GET** /addresses-historical/evm/{blockchain}/{network}/{address}/tokens-transfers | Get Synced Address Tokens Transfer EVM |
| [**listConfirmedTransactionsByAddressEVMHistory()**](AddressHistoryEVMApi.md#listConfirmedTransactionsByAddressEVMHistory) | **GET** /addresses-historical/evm/{blockchain}/{network}/{address}/transactions | List Confirmed Transactions By Address EVM history |
| [**listSyncedAddressInternalTransactionsEVM()**](AddressHistoryEVMApi.md#listSyncedAddressInternalTransactionsEVM) | **GET** /addresses-historical/evm/{blockchain}/{network}/{address}/internal | List Synced Address Internal Transactions EVM |
| [**listTokensByAddressSyncedEVM()**](AddressHistoryEVMApi.md#listTokensByAddressSyncedEVM) | **GET** /addresses-historical/evm/{blockchain}/{network}/{address}/tokens | List Tokens By Address Synced EVM |


## `getSyncedAddressTokensTransferEVM()`

```php
getSyncedAddressTokensTransferEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter): \MitinSany/CryptoapisApiClient\Model\GetSyncedAddressTokensTransferEVMR
```

Get Synced Address Tokens Transfer EVM

Through this endpoint customers can obtain a list with confirmed token transfers by the address attribute. Token transfers may include information such as addresses of the sender and recipient, token name, token symbol, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressHistoryEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string
$network = sepolia; // string
$address = 0x3d0b25fe09e2cd92f06ba776391a122519936e90; // string | String identifier of the address document represented in CryptoAPIs
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$sortingOrder = descending; // string | Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->getSyncedAddressTokensTransferEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressHistoryEVMApi->getSyncedAddressTokensTransferEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**|  | |
| **network** | **string**|  | |
| **address** | **string**| String identifier of the address document represented in CryptoAPIs | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50] |
| **sortingOrder** | **string**| Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp | [optional] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetSyncedAddressTokensTransferEVMR**](../Model/GetSyncedAddressTokensTransferEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConfirmedTransactionsByAddressEVMHistory()`

```php
listConfirmedTransactionsByAddressEVMHistory($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter): \MitinSany/CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressEVMHistoryR
```

List Confirmed Transactions By Address EVM history

This endpoint will list transactions by an attribute `address`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressHistoryEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = 0xc8c960a01ac67c5e1424f7d5afb08a625aff9076; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$sortingOrder = descending; // string | Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->listConfirmedTransactionsByAddressEVMHistory($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressHistoryEVMApi->listConfirmedTransactionsByAddressEVMHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **sortingOrder** | **string**| Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp | [optional] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressEVMHistoryR**](../Model/ListConfirmedTransactionsByAddressEVMHistoryR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncedAddressInternalTransactionsEVM()`

```php
listSyncedAddressInternalTransactionsEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter): \MitinSany/CryptoapisApiClient\Model\ListSyncedAddressInternalTransactionsEVMR
```

List Synced Address Internal Transactions EVM

Through this endpoint customers can list internal transactions by the address attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressHistoryEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string
$network = sepolia; // string
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | String identifier of the address document represented in CryptoAPIs
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$sortingOrder = descending; // string | Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->listSyncedAddressInternalTransactionsEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressHistoryEVMApi->listSyncedAddressInternalTransactionsEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**|  | |
| **network** | **string**|  | |
| **address** | **string**| String identifier of the address document represented in CryptoAPIs | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50] |
| **sortingOrder** | **string**| Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp | [optional] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListSyncedAddressInternalTransactionsEVMR**](../Model/ListSyncedAddressInternalTransactionsEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTokensByAddressSyncedEVM()`

```php
listTokensByAddressSyncedEVM($blockchain, $network, $address, $context, $limit, $startingAfter): \MitinSany/CryptoapisApiClient\Model\ListTokensByAddressSyncedEVMR
```

List Tokens By Address Synced EVM

Through this endpoint customers can obtain token data by providing an attribute - address. The information that can be returned can include the contract address, the token symbol, type and balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressHistoryEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string
$network = sepolia; // string
$address = 0x935ba3DED4074903e6854424235772e4Db862af5; // string | String identifier of the address
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->listTokensByAddressSyncedEVM($blockchain, $network, $address, $context, $limit, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressHistoryEVMApi->listTokensByAddressSyncedEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**|  | |
| **network** | **string**|  | |
| **address** | **string**| String identifier of the address | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListTokensByAddressSyncedEVMR**](../Model/ListTokensByAddressSyncedEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
