# CryptoapisApiClient\HDWalletApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**syncHDWalletXPubYPubZPub()**](HDWalletApi.md#syncHDWalletXPubYPubZPub) | **POST** /hd-wallets/manage/{blockchain}/{network}/{extendedPublicKey}/sync | Sync HD Wallet (xPub, yPub, zPub) |


## `syncHDWalletXPubYPubZPub()`

```php
syncHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context, $syncHDWalletXPubYPubZPubRB): \CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubR
```

Sync HD Wallet (xPub, yPub, zPub)

HD wallets usually have a lot of addresses and transactions, getting the data on demand is a heavy operation. That's why we have created this feature, to be able to get HD wallet details or transactions this HD wallet must be synced first. In addition to the initial sync we keep updating the synced HD wallets all the time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\HDWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$syncHDWalletXPubYPubZPubRB = new \CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubRB(); // \CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->syncHDWalletXPubYPubZPub($blockchain, $extendedPublicKey, $network, $context, $syncHDWalletXPubYPubZPubRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletApi->syncHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **syncHDWalletXPubYPubZPubRB** | [**\CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubRB**](../Model/SyncHDWalletXPubYPubZPubRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\SyncHDWalletXPubYPubZPubR**](../Model/SyncHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
