# MitinSany/CryptoapisApiClient\HDWalletDataUTXOApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deriveAndSyncNewChangeAddressesUTXO()**](HDWalletDataUTXOApi.md#deriveAndSyncNewChangeAddressesUTXO) | **POST** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/addresses/derive-and-sync-change | Derive And Sync New Change Addresses UTXO |
| [**deriveAndSyncNewReceivingAddressesUTXO()**](HDWalletDataUTXOApi.md#deriveAndSyncNewReceivingAddressesUTXO) | **POST** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/addresses/derive-and-sync | Derive And Sync New Receiving Addresses UTXO |
| [**getHDWalletXPubYPubZPubAssetsUTXO()**](HDWalletDataUTXOApi.md#getHDWalletXPubYPubZPubAssetsUTXO) | **GET** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/assets | Get HD Wallet (xPub, yPub, zPub) Assets UTXO |
| [**getHDWalletXPubYPubZPubDetailsUTXO()**](HDWalletDataUTXOApi.md#getHDWalletXPubYPubZPubDetailsUTXO) | **GET** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/details | Get HD Wallet (xPub, yPub, zPub) Details UTXO |
| [**listHDWalletXPubYPubZPubTransactionsUTXO()**](HDWalletDataUTXOApi.md#listHDWalletXPubYPubZPubTransactionsUTXO) | **GET** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/transactions | List HD Wallet (xPub, yPub, zPub) Transactions UTXO |
| [**listHDWalletXPubYPubZPubUTXOs()**](HDWalletDataUTXOApi.md#listHDWalletXPubYPubZPubUTXOs) | **GET** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/unspent-outputs | List HD Wallet (xPub, yPub, zPub) UTXOs |
| [**listSyncedAddressesUTXO()**](HDWalletDataUTXOApi.md#listSyncedAddressesUTXO) | **GET** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/addresses | List Synced Addresses UTXO |
| [**prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub()**](HDWalletDataUTXOApi.md#prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub) | **POST** /hd-wallets/utxo/{blockchain}/{network}/{extendedPublicKey}/transactions/prepare | Prepare A UTXO-Based Transaction From HD Wallet (xPub, yPub, zPub) |


## `deriveAndSyncNewChangeAddressesUTXO()`

```php
deriveAndSyncNewChangeAddressesUTXO($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewChangeAddressesUTXORB): \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewChangeAddressesUTXOR
```

Derive And Sync New Change Addresses UTXO

Through this endpoint users can derive 100 change addresses, starting from the last index we have data for, which are then added to the xPub, subscribed for syncing, and start recording data. If no data is available, it will start from index 0. We use type P2WPKH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub6BuJ8T4xTEePRTWxEcyyZRHPRZw91GFRjuu4H1eNqNGDswpraD5Hthf7JBbK7iQayuLf2MbxT6MVrKGbY7HvBcQo937Qiwmxz7Fzy9S5y9q; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$deriveAndSyncNewChangeAddressesUTXORB = new \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewChangeAddressesUTXORB(); // \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewChangeAddressesUTXORB

try {
    $result = $apiInstance->deriveAndSyncNewChangeAddressesUTXO($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewChangeAddressesUTXORB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->deriveAndSyncNewChangeAddressesUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **deriveAndSyncNewChangeAddressesUTXORB** | [**\MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewChangeAddressesUTXORB**](../Model/DeriveAndSyncNewChangeAddressesUTXORB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewChangeAddressesUTXOR**](../Model/DeriveAndSyncNewChangeAddressesUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deriveAndSyncNewReceivingAddressesUTXO()`

```php
deriveAndSyncNewReceivingAddressesUTXO($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewReceivingAddressesUTXORB): \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesUTXOR
```

Derive And Sync New Receiving Addresses UTXO

Through this endpoint users can derive 100 receiving addresses, starting from the last index we have data for, which are then added to the xPub, subscribed for syncing, and start recording data. If no data is available, it will start from index 0. We use type P2WPKH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub6DSqNgZke91RZBXk9s8tBknGPiVB7AQqVyxHCLEM49D3VGeMWg6qmSDruSn7SgQApVH1M8cSvjXfDmhRysDt9hZWFAMcZf4X1DAzd23G4ZQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$deriveAndSyncNewReceivingAddressesUTXORB = new \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesUTXORB(); // \MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesUTXORB

try {
    $result = $apiInstance->deriveAndSyncNewReceivingAddressesUTXO($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewReceivingAddressesUTXORB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->deriveAndSyncNewReceivingAddressesUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **deriveAndSyncNewReceivingAddressesUTXORB** | [**\MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesUTXORB**](../Model/DeriveAndSyncNewReceivingAddressesUTXORB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesUTXOR**](../Model/DeriveAndSyncNewReceivingAddressesUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubAssetsUTXO()`

```php
getHDWalletXPubYPubZPubAssetsUTXO($blockchain, $extendedPublicKey, $network, $context, $derivation): \MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubAssetsUTXOR
```

Get HD Wallet (xPub, yPub, zPub) Assets UTXO

This endpoint will return details on assets we support for a specified from the customer extended public key (xPub). These could be cryptocurrencies, fungible or non-fungible (NFT) tokens. Each asset has a unique identifier - assetId, and a unique symbol in the form of a string, e.g. \"USDT\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub68SyZPMPpZUy9QB2fk2J28b5Rwd6jeWKind3K8oziZuVcL7wWZiXZNCPKuh42ejSpTLYngQ9Gbzj9a1Ap2QQmoFs2sMSbUvkEr8D3GW7MrR; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = bip32; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubAssetsUTXO($blockchain, $extendedPublicKey, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->getHDWalletXPubYPubZPubAssetsUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubAssetsUTXOR**](../Model/GetHDWalletXPubYPubZPubAssetsUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubDetailsUTXO()`

```php
getHDWalletXPubYPubZPubDetailsUTXO($blockchain, $extendedPublicKey, $network, $context, $derivation): \MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubDetailsUTXOR
```

Get HD Wallet (xPub, yPub, zPub) Details UTXO

HD wallet details is useful endpoint to get the most important data about HD wallet without the need to do a lot of calculations, once the HD Wallet is synced using Sync endpoint we keep it up to date and we calculate these details in advance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = bip32; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubDetailsUTXO($blockchain, $extendedPublicKey, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->getHDWalletXPubYPubZPubDetailsUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubDetailsUTXOR**](../Model/GetHDWalletXPubYPubZPubDetailsUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHDWalletXPubYPubZPubTransactionsUTXO()`

```php
listHDWalletXPubYPubZPubTransactionsUTXO($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset): \MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsUTXOR
```

List HD Wallet (xPub, yPub, zPub) Transactions UTXO

This endpoint will list HD Wallet transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain.
$extendedPublicKey = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the master public key (xPub) of the account.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listHDWalletXPubYPubZPubTransactionsUTXO($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->listHDWalletXPubYPubZPubTransactionsUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain. | |
| **extendedPublicKey** | **string**| Defines the master public key (xPub) of the account. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional] [default to &#39;account&#39;] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsUTXOR**](../Model/ListHDWalletXPubYPubZPubTransactionsUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHDWalletXPubYPubZPubUTXOs()`

```php
listHDWalletXPubYPubZPubUTXOs($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset): \MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubUTXOsR
```

List HD Wallet (xPub, yPub, zPub) UTXOs

Through this endpoint you can list HD wallet's UTXOs (Unspent Transaction Outputs) by providing extended public key of an already synced HD wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = tpubDDCs6jf3Tg8VTts6EBCNpibVanPQpSkmYRLAXVvuhcuC6ZcbYtEizqERj8D4TBukuvjNSjtjEbKYdtFuRG5WuisrirZG9m5L8wUvf4bHhgQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listHDWalletXPubYPubZPubUTXOs($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->listHDWalletXPubYPubZPubUTXOs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubUTXOsR**](../Model/ListHDWalletXPubYPubZPubUTXOsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncedAddressesUTXO()`

```php
listSyncedAddressesUTXO($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $isChangeAddress, $limit, $offset): \MitinSany/CryptoapisApiClient\Model\ListSyncedAddressesUTXOR
```

List Synced Addresses UTXO

Through this endpoint users can list all addresses that Crypto APIs has synced for a specific xPub. This includes previous and current/new xPubs, what addresses we’ve synced for them, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name
$extendedPublicKey = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\"
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$addressFormat = standard; // string | Defines the address format value.
$isChangeAddress = false; // bool | Defines if the address is change addres or not.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listSyncedAddressesUTXO($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $isChangeAddress, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->listSyncedAddressesUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot; | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **addressFormat** | **string**| Defines the address format value. | [optional] |
| **isChangeAddress** | **bool**| Defines if the address is change addres or not. | [optional] [default to true] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ListSyncedAddressesUTXOR**](../Model/ListSyncedAddressesUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub()`

```php
prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub($blockchain, $network, $extendedPublicKey, $context, $prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB): \MitinSany/CryptoapisApiClient\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubR
```

Prepare A UTXO-Based Transaction From HD Wallet (xPub, yPub, zPub)

Through the “Prepare a UTXO-based transaction from xPub” endpoint users can prepare a transaction for signing from all synced with Crypto APIs addresses for the specific xPub. This is based on the `selectionStrategy` and the addresses’ balances. In the case a user has an address not synced with Crypto APIs, it will not be included. This endpoint applies to all supported UTXO-based blockchain protocols, e.g. Bitcoin, Litecoin, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\HDWalletDataUTXOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$extendedPublicKey = tpubDCNoSqt3HF32yq8VU6mgapTuW1FzENZa3C5dKUF6WCQzubWz2nA1yxUhMQWkhhkD58Uc8YiuD8cmB3y5tihqAv4zT2GNyqKTNLchHJmsvt9; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB = new \MitinSany/CryptoapisApiClient\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB(); // \MitinSany/CryptoapisApiClient\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub($blockchain, $network, $extendedPublicKey, $context, $prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataUTXOApi->prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB** | [**\MitinSany/CryptoapisApiClient\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB**](../Model/PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubR**](../Model/PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
