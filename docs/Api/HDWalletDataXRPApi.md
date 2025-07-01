# MitinSany/CryptoapisApiClient\HDWalletDataXRPApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deriveAndSyncNewReceivingAddressesXRP()**](HDWalletDataXRPApi.md#deriveAndSyncNewReceivingAddressesXRP) | **POST** /hd-wallets/{blockchain}/{network}/{extendedPublicKey}/addresses/derive-and-sync | Derive And Sync New Receiving Addresses XRP |
| [**getHDWalletXPubYPubZPubAssetsXRP()**](HDWalletDataXRPApi.md#getHDWalletXPubYPubZPubAssetsXRP) | **GET** /hd-wallets/{blockchain}/{network}/{extendedPublicKey}/assets | Get HD Wallet (xPub, yPub, zPub) Assets XRP |
| [**getHDWalletXPubYPubZPubDetailsXRP()**](HDWalletDataXRPApi.md#getHDWalletXPubYPubZPubDetailsXRP) | **GET** /hd-wallets/{blockchain}/{network}/{extendedPublicKey}/details | Get HD Wallet (xPub, yPub, zPub) Details XRP |
| [**listHDWalletXPubYPubZPubTransactionsXRP()**](HDWalletDataXRPApi.md#listHDWalletXPubYPubZPubTransactionsXRP) | **GET** /hd-wallets/{blockchain}/{network}/{extendedPublicKey}/transactions | List HD Wallet (xPub, yPub, zPub) Transactions XRP |
| [**listSyncedAddressesXRP()**](HDWalletDataXRPApi.md#listSyncedAddressesXRP) | **GET** /hd-wallets/{blockchain}/{network}/{extendedPublicKey}/addresses | List Synced Addresses XRP |


## `deriveAndSyncNewReceivingAddressesXRP()`

```php
deriveAndSyncNewReceivingAddressesXRP($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewReceivingAddressesXRPRB): \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesXRPR
```

Derive And Sync New Receiving Addresses XRP

Through this endpoint users can derive 100 receiving addresses, starting from the last index we have data for, which are then added to the xPub, subscribed for syncing, and start recording data. If no data is available, it will start from index 0. We use type P2WPKH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub6DSqNgZke91RZBXk9s8tBknGPiVB7AQqVyxHCLEM49D3VGeMWg6qmSDruSn7SgQApVH1M8cSvjXfDmhRysDt9hZWFAMcZf4X1DAzd23G4ZQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$deriveAndSyncNewReceivingAddressesXRPRB = new \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesXRPRB(); // \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesXRPRB

try {
    $result = $apiInstance->deriveAndSyncNewReceivingAddressesXRP($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewReceivingAddressesXRPRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataXRPApi->deriveAndSyncNewReceivingAddressesXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;xrp&#39;] |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **deriveAndSyncNewReceivingAddressesXRPRB** | [**\MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesXRPRB**](../Model/DeriveAndSyncNewReceivingAddressesXRPRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesXRPR**](../Model/DeriveAndSyncNewReceivingAddressesXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubAssetsXRP()`

```php
getHDWalletXPubYPubZPubAssetsXRP($blockchain, $extendedPublicKey, $network, $context, $derivation): \MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubAssetsXRPR
```

Get HD Wallet (xPub, yPub, zPub) Assets XRP

This endpoint will return details on assets we support for a specified from the customer extended public key (xPub). These could be cryptocurrencies, fungible or non-fungible (NFT) tokens. Each asset has a unique identifier - assetId, and a unique symbol in the form of a string, e.g. \"USDT\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub68SyZPMPpZUy9QB2fk2J28b5Rwd6jeWKind3K8oziZuVcL7wWZiXZNCPKuh42ejSpTLYngQ9Gbzj9a1Ap2QQmoFs2sMSbUvkEr8D3GW7MrR; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubAssetsXRP($blockchain, $extendedPublicKey, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataXRPApi->getHDWalletXPubYPubZPubAssetsXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;xrp&#39;] |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubAssetsXRPR**](../Model/GetHDWalletXPubYPubZPubAssetsXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubDetailsXRP()`

```php
getHDWalletXPubYPubZPubDetailsXRP($blockchain, $extendedPublicKey, $network, $context, $derivation): \MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubDetailsXRPR
```

Get HD Wallet (xPub, yPub, zPub) Details XRP

HD wallet details is useful endpoint to get the most important data about HD wallet without the need to do a lot of calculations, once the HD Wallet is synced using Sync endpoint we keep it up to date and we calculate these details in advance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubDetailsXRP($blockchain, $extendedPublicKey, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataXRPApi->getHDWalletXPubYPubZPubDetailsXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;xrp&#39;] |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubDetailsXRPR**](../Model/GetHDWalletXPubYPubZPubDetailsXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHDWalletXPubYPubZPubTransactionsXRP()`

```php
listHDWalletXPubYPubZPubTransactionsXRP($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset): \MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsXRPR
```

List HD Wallet (xPub, yPub, zPub) Transactions XRP

This endpoint will list HD Wallet transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = xrp; // string | Represents the specific blockchain.
$extendedPublicKey = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the master public key (xPub) of the account.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = 'derivation_example'; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listHDWalletXPubYPubZPubTransactionsXRP($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataXRPApi->listHDWalletXPubYPubZPubTransactionsXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain. | [default to &#39;xrp&#39;] |
| **extendedPublicKey** | **string**| Defines the master public key (xPub) of the account. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsXRPR**](../Model/ListHDWalletXPubYPubZPubTransactionsXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncedAddressesXRP()`

```php
listSyncedAddressesXRP($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $isChangeAddress, $limit, $offset): \MitinSany/CryptoapisApiClient\Model\ListSyncedAddressesXRPR
```

List Synced Addresses XRP

Through this endpoint users can list all addresses that Crypto APIs has synced for a specific xPub. This includes previous and current/new xPubs, what addresses we’ve synced for them, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$addressFormat = classic; // string | Defines the address format value.
$isChangeAddress = false; // bool | Defines if the address is change addres or not.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listSyncedAddressesXRP($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $isChangeAddress, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataXRPApi->listSyncedAddressesXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;xrp&#39;] |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **addressFormat** | **string**| Defines the address format value. | [optional] |
| **isChangeAddress** | **bool**| Defines if the address is change addres or not. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListSyncedAddressesXRPR**](../Model/ListSyncedAddressesXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
