# CryptoapisApiClient\AddressHistoryApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateSyncedAddress()**](AddressHistoryApi.md#activateSyncedAddress) | **POST** /addresses-historical/manage/{blockchain}/{network}/{address}/activate | Activate Synced Address |
| [**listSyncedAddresses()**](AddressHistoryApi.md#listSyncedAddresses) | **GET** /addresses-historical/manage/{blockchain}/{network} | List Synced Addresses |
| [**syncAddress()**](AddressHistoryApi.md#syncAddress) | **POST** /addresses-historical/manage/{blockchain}/{network} | Sync Address |


## `activateSyncedAddress()`

```php
activateSyncedAddress($address, $blockchain, $network, $context, $activateSyncedAddressRB): \CryptoapisApiClient\Model\ActivateSyncedAddressR
```

Activate Synced Address

Through this endpoint, users can activate a previously synced address with Crypto APIs. Once activated, the address will resume tracking, and any new or missing data associated with it will be synchronized and made available for further operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 0x3d0b25fe09e2cd92f06ba776391a122519936e90; // string | Represents the public address, which is a compressed and shortened form of a public key.
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$activateSyncedAddressRB = new \CryptoapisApiClient\Model\ActivateSyncedAddressRB(); // \CryptoapisApiClient\Model\ActivateSyncedAddressRB

try {
    $result = $apiInstance->activateSyncedAddress($address, $blockchain, $network, $context, $activateSyncedAddressRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressHistoryApi->activateSyncedAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **activateSyncedAddressRB** | [**\CryptoapisApiClient\Model\ActivateSyncedAddressRB**](../Model/ActivateSyncedAddressRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\ActivateSyncedAddressR**](../Model/ActivateSyncedAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncedAddresses()`

```php
listSyncedAddresses($blockchain, $network, $context, $limit, $startingAfter): \CryptoapisApiClient\Model\ListSyncedAddressesR
```

List Synced Addresses

Through this endpoint, users can retrieve a comprehensive list of all addresses synced with Crypto APIs, including their synchronization status and any associated data available for tracking and operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = polygon; // string
$network = mainnet; // string
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$startingAfter = 5ca21f92cf5431000105d1a7; // string | Defines the id of the previous listed record id from which the current list should start from.

try {
    $result = $apiInstance->listSyncedAddresses($blockchain, $network, $context, $limit, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressHistoryApi->listSyncedAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**|  | |
| **network** | **string**|  | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **startingAfter** | **string**| Defines the id of the previous listed record id from which the current list should start from. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\ListSyncedAddressesR**](../Model/ListSyncedAddressesR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncAddress()`

```php
syncAddress($blockchain, $network, $context, $syncAddressRB): \CryptoapisApiClient\Model\SyncAddressR
```

Sync Address

Through this endpoint, users can synchronize a specific address with Crypto APIs. Once the synchronization is complete, users will have access to the full historical data associated with the address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\AddressHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string
$network = sepolia; // string
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$syncAddressRB = new \CryptoapisApiClient\Model\SyncAddressRB(); // \CryptoapisApiClient\Model\SyncAddressRB

try {
    $result = $apiInstance->syncAddress($blockchain, $network, $context, $syncAddressRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressHistoryApi->syncAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**|  | [default to &#39;ethereum&#39;] |
| **network** | **string**|  | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **syncAddressRB** | [**\CryptoapisApiClient\Model\SyncAddressRB**](../Model/SyncAddressRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\SyncAddressR**](../Model/SyncAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
