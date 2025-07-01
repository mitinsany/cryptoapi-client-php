# MitinSany/CryptoapisApiClient\AddressLatestUTXOsApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listConfirmedTransactionsByAddressUTXOs()**](AddressLatestUTXOsApi.md#listConfirmedTransactionsByAddressUTXOs) | **GET** /addresses-latest/utxo/{blockchain}/{network}/{address}/transactions | List Confirmed Transactions By Address UTXOs |
| [**listUnconfirmedTransactionsByAddressUTXOs()**](AddressLatestUTXOsApi.md#listUnconfirmedTransactionsByAddressUTXOs) | **GET** /addresses-latest/utxo/{blockchain}/{network}/{address}/unconfirmed-transactions | List Unconfirmed Transactions by Address UTXOs |


## `listConfirmedTransactionsByAddressUTXOs()`

```php
listConfirmedTransactionsByAddressUTXOs($blockchain, $network, $address, $context, $limit, $startingAfter, $sortingOrder): \MitinSany/CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressUTXOsR
```

List Confirmed Transactions By Address UTXOs

This endpoint will list transactions by an attribute `address`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.    {note}Please note that retrieving data will provide the most recent 14 days (1,209,600 seconds) of transactions from the current moment. To access the full historical data, please refer to the Address History APIs.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestUTXOsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = bc1qwzrryqr3ja8w7hnja2spmkgfdcgvqwp5swz4af4ngsjecfz0w0pqud7k38; // string | String representation of the address
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.
$sortingOrder = ascending; // string

try {
    $result = $apiInstance->listConfirmedTransactionsByAddressUTXOs($blockchain, $network, $address, $context, $limit, $startingAfter, $sortingOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestUTXOsApi->listConfirmedTransactionsByAddressUTXOs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| String representation of the address | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |
| **sortingOrder** | **string**|  | [optional] [default to &#39;ascending&#39;] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressUTXOsR**](../Model/ListConfirmedTransactionsByAddressUTXOsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnconfirmedTransactionsByAddressUTXOs()`

```php
listUnconfirmedTransactionsByAddressUTXOs($blockchain, $network, $address, $context, $limit, $offset): \MitinSany/CryptoapisApiClient\Model\ListUnconfirmedTransactionsByAddressUTXOsR
```

List Unconfirmed Transactions by Address UTXOs

Through this endpoint customers can list transactions by `address` that are **unconfirmed**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestUTXOsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = 2NDt6eztswLiVgVYaGUhkTPmugUGovVypAe; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listUnconfirmedTransactionsByAddressUTXOs($blockchain, $network, $address, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestUTXOsApi->listUnconfirmedTransactionsByAddressUTXOs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListUnconfirmedTransactionsByAddressUTXOsR**](../Model/ListUnconfirmedTransactionsByAddressUTXOsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
