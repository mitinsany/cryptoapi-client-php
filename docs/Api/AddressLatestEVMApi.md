# CryptoapisApiClient\AddressLatestEVMApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressBalanceEVM()**](AddressLatestEVMApi.md#getAddressBalanceEVM) | **GET** /addresses-latest/evm/{blockchain}/{network}/{address}/balance | Get Address Balance EVM |
| [**getNextAvailableNonceEVM()**](AddressLatestEVMApi.md#getNextAvailableNonceEVM) | **GET** /addresses-latest/evm/{blockchain}/{network}/{address}/next-available-nonce | Get Next Available Nonce EVM |
| [**listConfirmedTokensTransfersByAddressEVM()**](AddressLatestEVMApi.md#listConfirmedTokensTransfersByAddressEVM) | **GET** /addresses-latest/evm/{blockchain}/{network}/{address}/tokens-transfers | List Confirmed Tokens Transfers By Address EVM |
| [**listConfirmedTransactionsByAddressEVM()**](AddressLatestEVMApi.md#listConfirmedTransactionsByAddressEVM) | **GET** /addresses-latest/evm/{blockchain}/{network}/{address}/transactions | List Confirmed Transactions By Address EVM |
| [**listInternalTransactionsByAddressEVM()**](AddressLatestEVMApi.md#listInternalTransactionsByAddressEVM) | **GET** /addresses-latest/evm/{blockchain}/{network}/{address}/internal-transactions | List Internal Transactions By Address EVM |


## `getAddressBalanceEVM()`

```php
getAddressBalanceEVM($blockchain, $network, $address, $context): \CryptoapisApiClient\Model\GetAddressBalanceEVMR
```

Get Address Balance EVM

Through this endpoint the customer can receive the balance of a given address based on confirmed/synced blocks only. In the case where there are any incoming or outgoing unconfirmed transactions for the specific address, they will not be counted or calculated here. Applies only for coins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressLatestEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAddressBalanceEVM($blockchain, $network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestEVMApi->getAddressBalanceEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\GetAddressBalanceEVMR**](../Model/GetAddressBalanceEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNextAvailableNonceEVM()`

```php
getNextAvailableNonceEVM($blockchain, $network, $address, $context): \CryptoapisApiClient\Model\GetNextAvailableNonceEVMR
```

Get Next Available Nonce EVM

Through this endpoint customers can get information about the next available nonce by providing the specific blockchain, network and address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressLatestEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getNextAvailableNonceEVM($blockchain, $network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestEVMApi->getNextAvailableNonceEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\GetNextAvailableNonceEVMR**](../Model/GetNextAvailableNonceEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConfirmedTokensTransfersByAddressEVM()`

```php
listConfirmedTokensTransfersByAddressEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter): \CryptoapisApiClient\Model\ListConfirmedTokensTransfersByAddressEVMR
```

List Confirmed Tokens Transfers By Address EVM

Through this endpoint customers can obtain a list with **confirmed** token transfers by the `address` attribute. Token transfers may include information such as addresses of the sender and recipient, token name, token symbol, etc.    {note}This refers only to transfers done for **confirmed tokens** not coins.{/note}    {note}Please note that retrieving data will provide the most recent 14 days (1,209,600 seconds) of transactions from the current moment. To access the full historical data, please refer to the Address History APIs.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressLatestEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Ethereum Classic, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$sortingOrder = descending; // string | Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->listConfirmedTokensTransfersByAddressEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestEVMApi->listConfirmedTokensTransfersByAddressEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Ethereum Classic, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **sortingOrder** | **string**| Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp | [optional] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\ListConfirmedTokensTransfersByAddressEVMR**](../Model/ListConfirmedTokensTransfersByAddressEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConfirmedTransactionsByAddressEVM()`

```php
listConfirmedTransactionsByAddressEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter): \CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressEVMR
```

List Confirmed Transactions By Address EVM

This endpoint will list transactions by an attribute `address`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.    {note}Please note that retrieving data will provide the most recent 14 days (1,209,600 seconds) of transactions from the current moment. To access the full historical data, please refer to the Address History APIs.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressLatestEVMApi(
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
    $result = $apiInstance->listConfirmedTransactionsByAddressEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestEVMApi->listConfirmedTransactionsByAddressEVM: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressEVMR**](../Model/ListConfirmedTransactionsByAddressEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInternalTransactionsByAddressEVM()`

```php
listInternalTransactionsByAddressEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter): \CryptoapisApiClient\Model\ListInternalTransactionsByAddressEVMR
```

List Internal Transactions By Address EVM

Through this endpoint customers can list internal transactions by the `address` attribute.    {note}Please note that retrieving data will provide the most recent 14 days (1,209,600 seconds) of transactions from the current moment. To access the full historical data, please refer to the Address History APIs.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressLatestEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = 0x3d0b25fe09e2cd92f06ba776391a122519936e90; // string | String identifier of the address document represented in CryptoAPIs
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$sortingOrder = descending; // string | Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->listInternalTransactionsByAddressEVM($blockchain, $network, $address, $context, $limit, $sortingOrder, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestEVMApi->listInternalTransactionsByAddressEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| String identifier of the address document represented in CryptoAPIs | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50] |
| **sortingOrder** | **string**| Defines the sorting order of the results. DESCENDING or ASCENDING by timestamp | [optional] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\ListInternalTransactionsByAddressEVMR**](../Model/ListInternalTransactionsByAddressEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
