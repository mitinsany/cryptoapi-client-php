# CryptoapisApiClient\HDWalletDataEVMApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deriveAndSyncNewReceivingAddressesEVM()**](HDWalletDataEVMApi.md#deriveAndSyncNewReceivingAddressesEVM) | **POST** /hd-wallets/evm/{blockchain}/{network}/{extendedPublicKey}/addresses/derive-and-sync | Derive And Sync New Receiving Addresses EVM |
| [**getHDWalletXPubYPubZPubAssetsEVM()**](HDWalletDataEVMApi.md#getHDWalletXPubYPubZPubAssetsEVM) | **GET** /hd-wallets/evm/{blockchain}/{network}/{extendedPublicKey}/assets | Get HD Wallet (xPub, yPub, zPub) Assets EVM |
| [**getHDWalletXPubYPubZPubDetailsEVM()**](HDWalletDataEVMApi.md#getHDWalletXPubYPubZPubDetailsEVM) | **GET** /hd-wallets/evm/{blockchain}/{network}/{extendedPublicKey}/details | Get HD Wallet (xPub, yPub, zPub) Details EVM |
| [**listHDWalletXPubYPubZPubTransactionsEVM()**](HDWalletDataEVMApi.md#listHDWalletXPubYPubZPubTransactionsEVM) | **GET** /hd-wallets/evm/{blockchain}/{network}/{extendedPublicKey}/transactions | List HD Wallet (xPub, yPub, zPub) Transactions EVM |
| [**listSyncedAddressesEVM()**](HDWalletDataEVMApi.md#listSyncedAddressesEVM) | **GET** /hd-wallets/evm/{blockchain}/{network}/{extendedPublicKey}/addresses | List Synced Addresses EVM |
| [**prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVM()**](HDWalletDataEVMApi.md#prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVM) | **POST** /hd-wallets/evm/{blockchain}/{network}/{extendedPublicKey}/transactions/prepare | Prepare A Transaction From an Address in HD Wallet (xPub, yPub, zPub) EVM |


## `deriveAndSyncNewReceivingAddressesEVM()`

```php
deriveAndSyncNewReceivingAddressesEVM($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewReceivingAddressesEVMRB): \CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesEVMR
```

Derive And Sync New Receiving Addresses EVM

Through this endpoint users can derive 100 receiving addresses, starting from the last index we have data for, which are then added to the xPub, subscribed for syncing, and start recording data. If no data is available, it will start from index 0. We use type P2WPKH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\HDWalletDataEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub6DSqNgZke91RZBXk9s8tBknGPiVB7AQqVyxHCLEM49D3VGeMWg6qmSDruSn7SgQApVH1M8cSvjXfDmhRysDt9hZWFAMcZf4X1DAzd23G4ZQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$deriveAndSyncNewReceivingAddressesEVMRB = new \CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesEVMRB(); // \CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesEVMRB

try {
    $result = $apiInstance->deriveAndSyncNewReceivingAddressesEVM($blockchain, $extendedPublicKey, $network, $context, $deriveAndSyncNewReceivingAddressesEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataEVMApi->deriveAndSyncNewReceivingAddressesEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **deriveAndSyncNewReceivingAddressesEVMRB** | [**\CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesEVMRB**](../Model/DeriveAndSyncNewReceivingAddressesEVMRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\DeriveAndSyncNewReceivingAddressesEVMR**](../Model/DeriveAndSyncNewReceivingAddressesEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubAssetsEVM()`

```php
getHDWalletXPubYPubZPubAssetsEVM($blockchain, $extendedPublicKey, $network, $context, $derivation): \CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubAssetsEVMR
```

Get HD Wallet (xPub, yPub, zPub) Assets EVM

This endpoint will return details on assets we support for a specified from the customer extended public key (xPub). These could be cryptocurrencies, fungible or non-fungible (NFT) tokens. Each asset has a unique identifier - assetId, and a unique symbol in the form of a string, e.g. \"USDT\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\HDWalletDataEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = xpub68SyZPMPpZUy9QB2fk2J28b5Rwd6jeWKind3K8oziZuVcL7wWZiXZNCPKuh42ejSpTLYngQ9Gbzj9a1Ap2QQmoFs2sMSbUvkEr8D3GW7MrR; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubAssetsEVM($blockchain, $extendedPublicKey, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataEVMApi->getHDWalletXPubYPubZPubAssetsEVM: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubAssetsEVMR**](../Model/GetHDWalletXPubYPubZPubAssetsEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubDetailsEVM()`

```php
getHDWalletXPubYPubZPubDetailsEVM($blockchain, $extendedPublicKey, $network, $context, $derivation): \CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubDetailsEVMR
```

Get HD Wallet (xPub, yPub, zPub) Details EVM

HD wallet details is useful endpoint to get the most important data about HD wallet without the need to do a lot of calculations, once the HD Wallet is synced using Sync endpoint we keep it up to date and we calculate these details in advance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\HDWalletDataEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubDetailsEVM($blockchain, $extendedPublicKey, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataEVMApi->getHDWalletXPubYPubZPubDetailsEVM: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoapisApiClient\Model\GetHDWalletXPubYPubZPubDetailsEVMR**](../Model/GetHDWalletXPubYPubZPubDetailsEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHDWalletXPubYPubZPubTransactionsEVM()`

```php
listHDWalletXPubYPubZPubTransactionsEVM($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset): \CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsEVMR
```

List HD Wallet (xPub, yPub, zPub) Transactions EVM

This endpoint will list HD Wallet transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\HDWalletDataEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain.
$extendedPublicKey = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the master public key (xPub) of the account.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listHDWalletXPubYPubZPubTransactionsEVM($blockchain, $extendedPublicKey, $network, $context, $derivation, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataEVMApi->listHDWalletXPubYPubZPubTransactionsEVM: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsEVMR**](../Model/ListHDWalletXPubYPubZPubTransactionsEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncedAddressesEVM()`

```php
listSyncedAddressesEVM($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $isChangeAddress, $limit, $offset): \CryptoapisApiClient\Model\ListSyncedAddressesEVMR
```

List Synced Addresses EVM

Through this endpoint users can list all addresses that Crypto APIs has synced for a specific xPub. This includes previous and current/new xPubs, what addresses we’ve synced for them, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\HDWalletDataEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$addressFormat = standard; // string | Defines the address format value.
$isChangeAddress = false; // bool | Defines if the address is change addres or not.
$limit = 10; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listSyncedAddressesEVM($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $isChangeAddress, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataEVMApi->listSyncedAddressesEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **addressFormat** | **string**| Defines the address format value. | [optional] |
| **isChangeAddress** | **bool**| Defines if the address is change addres or not. | [optional] [default to true] |
| **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 10] |
| **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0] |

### Return type

[**\CryptoapisApiClient\Model\ListSyncedAddressesEVMR**](../Model/ListSyncedAddressesEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVM()`

```php
prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVM($blockchain, $network, $extendedPublicKey, $type, $context, $prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB): \CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMR
```

Prepare A Transaction From an Address in HD Wallet (xPub, yPub, zPub) EVM

Through the “Prepare an account-based transaction from xPub” endpoint users can prepare a transaction for signing from a synced with Crypto APIs address from the specific xPub. This endpoint applies to all supported account-based blockchain protocols, e.g. Ethereum, BSC, etc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\HDWalletDataEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$extendedPublicKey = xpub6CsGdqTDEVRnLmpWN218HBwJqfhqSx46iA8ByzEA5Bz9jfwU3TSg9U7ambKgJyykvCraHQ6sAFAddMGFdPzhXrRanKbHnnkbDTyRPyn5gRJ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$type = legacy-transaction; // string | Enum representation of the transaction type
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB = new \CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB(); // \CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB

try {
    $result = $apiInstance->prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVM($blockchain, $network, $extendedPublicKey, $type, $context, $prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletDataEVMApi->prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **type** | **string**| Enum representation of the transaction type | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **prepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB** | [**\CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB**](../Model/PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMR**](../Model/PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
