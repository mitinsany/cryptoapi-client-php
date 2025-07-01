# MitinSany/CryptoapisApiClient\AddressLatestKaspaApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressBalanceKaspa()**](AddressLatestKaspaApi.md#getAddressBalanceKaspa) | **GET** /addresses-latest/kaspa/{network}/{address}/balance | Get Address Balance Kaspa |
| [**listConfirmedTransactionsByAddressKaspa()**](AddressLatestKaspaApi.md#listConfirmedTransactionsByAddressKaspa) | **GET** /addresses-latest/kaspa/{network}/{address}/transactions | List Confirmed Transactions By Address Kaspa |


## `getAddressBalanceKaspa()`

```php
getAddressBalanceKaspa($network, $address, $context): \MitinSany/CryptoapisApiClient\Model\GetAddressBalanceKaspaR
```

Get Address Balance Kaspa

Through this endpoint the customer can receive the balance of a given address based on confirmed/synced blocks only. In the case where there are any incoming or outgoing unconfirmed transactions for the specific address, they will not be counted or calculated here. Applies only for coins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestKaspaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = kaspa:qrt9hh06x96r63h8rn086at8w6kh2qs45azgy09j5ntcyuf5n9vdcghqmlw77; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAddressBalanceKaspa($network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestKaspaApi->getAddressBalanceKaspa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetAddressBalanceKaspaR**](../Model/GetAddressBalanceKaspaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConfirmedTransactionsByAddressKaspa()`

```php
listConfirmedTransactionsByAddressKaspa($network, $address, $context, $limit, $startingAfter): \MitinSany/CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressKaspaR
```

List Confirmed Transactions By Address Kaspa

This endpoint will list transactions by an attribute `address`. The transactions listed will detail additional information such as hash, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\AddressLatestKaspaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$address = kaspa:qpamkvhgh0kzx50gwvvp5xs8ktmqutcy3dfs9dc3w7lm9rq0zs76vf959mmrp; // string | String representation of the address
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->listConfirmedTransactionsByAddressKaspa($network, $address, $context, $limit, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLatestKaspaApi->listConfirmedTransactionsByAddressKaspa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **address** | **string**| String representation of the address | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListConfirmedTransactionsByAddressKaspaR**](../Model/ListConfirmedTransactionsByAddressKaspaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
