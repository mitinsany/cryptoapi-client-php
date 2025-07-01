# MitinSany/CryptoapisApiClient\ManageHDWalletApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateHDWalletXPubYPubZPub()**](ManageHDWalletApi.md#activateHDWalletXPubYPubZPub) | **POST** /hd-wallets/manage/{blockchain}/{network}/{extendedPublicKey}/activate | Activate HD Wallet (xPub, yPub, zPub) |
| [**deleteSyncedHDWalletXPubYPubZPub()**](ManageHDWalletApi.md#deleteSyncedHDWalletXPubYPubZPub) | **DELETE** /hd-wallets/manage/{blockchain}/{network}/{extendedPublicKey} | Delete Synced HD Wallet (xPub, yPub, zPub) |
| [**listSyncedHDWalletsXPubYPubZPub()**](ManageHDWalletApi.md#listSyncedHDWalletsXPubYPubZPub) | **GET** /hd-wallets/manage/{blockchain}/{network} | List Synced HD Wallets (xPub, yPub, zPub) |
| [**syncHDWalletXPubYPubZPub()**](ManageHDWalletApi.md#syncHDWalletXPubYPubZPub) | **POST** /hd-wallets/manage/{blockchain}/{network}/{extendedPublicKey}/sync | Sync HD Wallet (xPub, yPub, zPub) |


## `activateHDWalletXPubYPubZPub()`

```php
activateHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context, $activateHDWalletXPubYPubZPubRB): \MitinSany/CryptoapisApiClient\Model\ActivateHDWalletXPubYPubZPubR
```

Activate HD Wallet (xPub, yPub, zPub)

Through this endpoint you can activate a deactivated HD wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ManageHDWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub6C25R29GcNuxTsDMDmkfBXi2eqg6PyAJtSX8EVMK7scsSVrLfHCLK3LtR3GvAgoGe8vJF7R85BbTxGsSSertPTXzJy2EyJWhHvWTrJmZpHa; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$activateHDWalletXPubYPubZPubRB = new \MitinSany/CryptoapisApiClient\Model\ActivateHDWalletXPubYPubZPubRB(); // \MitinSany/CryptoapisApiClient\Model\ActivateHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->activateHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context, $activateHDWalletXPubYPubZPubRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageHDWalletApi->activateHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **activateHDWalletXPubYPubZPubRB** | [**\MitinSany/CryptoapisApiClient\Model\ActivateHDWalletXPubYPubZPubRB**](../Model/ActivateHDWalletXPubYPubZPubRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ActivateHDWalletXPubYPubZPubR**](../Model/ActivateHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSyncedHDWalletXPubYPubZPub()`

```php
deleteSyncedHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context): \MitinSany/CryptoapisApiClient\Model\DeleteSyncedHDWalletXPubYPubZPubR
```

Delete Synced HD Wallet (xPub, yPub, zPub)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ManageHDWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->deleteSyncedHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageHDWalletApi->deleteSyncedHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\DeleteSyncedHDWalletXPubYPubZPubR**](../Model/DeleteSyncedHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncedHDWalletsXPubYPubZPub()`

```php
listSyncedHDWalletsXPubYPubZPub($blockchain, $network, $context, $limit, $offset): \MitinSany/CryptoapisApiClient\Model\ListSyncedHDWalletsXPubYPubZPubR
```

List Synced HD Wallets (xPub, yPub, zPub)

Through this endpoint you can list all of your synced HD Wallets by providing their blockchain protocol and network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ManageHDWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listSyncedHDWalletsXPubYPubZPub($blockchain, $network, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageHDWalletApi->listSyncedHDWalletsXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListSyncedHDWalletsXPubYPubZPubR**](../Model/ListSyncedHDWalletsXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncHDWalletXPubYPubZPub()`

```php
syncHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context, $syncHDWalletXPubYPubZPubRB): \MitinSany/CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubR
```

Sync HD Wallet (xPub, yPub, zPub)

HD wallets usually have a lot of addresses and transactions, getting the data on demand is a heavy operation. That's why we have created this feature, to be able to get HD wallet details or transactions this HD wallet must be synced first. In addition to the initial sync we keep updating the synced HD wallets all the time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ManageHDWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$syncHDWalletXPubYPubZPubRB = new \MitinSany/CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubRB(); // \MitinSany/CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->syncHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context, $syncHDWalletXPubYPubZPubRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageHDWalletApi->syncHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **syncHDWalletXPubYPubZPubRB** | [**\MitinSany/CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubRB**](../Model/SyncHDWalletXPubYPubZPubRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubR**](../Model/SyncHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
