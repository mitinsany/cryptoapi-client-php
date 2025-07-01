# CryptoapisApiClient\PrepareTransactionsEVMsApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**prepareAFungibleTokenTransferFromAddressEVM()**](PrepareTransactionsEVMsApi.md#prepareAFungibleTokenTransferFromAddressEVM) | **POST** /prepare-transactions/evm/{blockchain}/{network}/fungible-tokens | Prepare A Fungible Token Transfer From Address EVM |
| [**prepareANonFungibleTokenTransferFromAddressEVM()**](PrepareTransactionsEVMsApi.md#prepareANonFungibleTokenTransferFromAddressEVM) | **POST** /prepare-transactions/evm/{blockchain}/{network}/non-fungible-tokens | Prepare A Non Fungible Token Transfer From Address EVM |
| [**prepareTransactionFromAddressEVM()**](PrepareTransactionsEVMsApi.md#prepareTransactionFromAddressEVM) | **POST** /prepare-transactions/evm/{blockchain}/{network}/native-coins | Prepare Transaction From Address EVM |


## `prepareAFungibleTokenTransferFromAddressEVM()`

```php
prepareAFungibleTokenTransferFromAddressEVM($blockchain, $network, $context, $prepareAFungibleTokenTransferFromAddressEVMRB): \CryptoapisApiClient\Model\PrepareAFungibleTokenTransferFromAddressEVMR
```

Prepare A Fungible Token Transfer From Address EVM

Using this endpoint customers can prepare a fungible token transfer from an address with private and public keys. The address doesn’t have to belong to a wallet. The response will include the transaction fee in Wei.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\PrepareTransactionsEVMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"mordor\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$prepareAFungibleTokenTransferFromAddressEVMRB = new \CryptoapisApiClient\Model\PrepareAFungibleTokenTransferFromAddressEVMRB(); // \CryptoapisApiClient\Model\PrepareAFungibleTokenTransferFromAddressEVMRB

try {
    $result = $apiInstance->prepareAFungibleTokenTransferFromAddressEVM($blockchain, $network, $context, $prepareAFungibleTokenTransferFromAddressEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepareTransactionsEVMsApi->prepareAFungibleTokenTransferFromAddressEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;mordor\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **prepareAFungibleTokenTransferFromAddressEVMRB** | [**\CryptoapisApiClient\Model\PrepareAFungibleTokenTransferFromAddressEVMRB**](../Model/PrepareAFungibleTokenTransferFromAddressEVMRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\PrepareAFungibleTokenTransferFromAddressEVMR**](../Model/PrepareAFungibleTokenTransferFromAddressEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareANonFungibleTokenTransferFromAddressEVM()`

```php
prepareANonFungibleTokenTransferFromAddressEVM($blockchain, $network, $context, $prepareANonFungibleTokenTransferFromAddressEVMRB): \CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMR
```

Prepare A Non Fungible Token Transfer From Address EVM

Using this endpoint customers can prepare a non-fungible token transfer from an address with private and public keys. The address doesn’t have to belong to a wallet. The response will include the transaction fee in Wei.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\PrepareTransactionsEVMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"mordor\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$prepareANonFungibleTokenTransferFromAddressEVMRB = new \CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMRB(); // \CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMRB

try {
    $result = $apiInstance->prepareANonFungibleTokenTransferFromAddressEVM($blockchain, $network, $context, $prepareANonFungibleTokenTransferFromAddressEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepareTransactionsEVMsApi->prepareANonFungibleTokenTransferFromAddressEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;mordor\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **prepareANonFungibleTokenTransferFromAddressEVMRB** | [**\CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMRB**](../Model/PrepareANonFungibleTokenTransferFromAddressEVMRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMR**](../Model/PrepareANonFungibleTokenTransferFromAddressEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareTransactionFromAddressEVM()`

```php
prepareTransactionFromAddressEVM($blockchain, $network, $type, $context, $prepareTransactionFromAddressEVMRB): \CryptoapisApiClient\Model\PrepareTransactionFromAddressEVMR
```

Prepare Transaction From Address EVM

Through this endpoint customers can prepare a transaction from an address with private and public keys. The address doesn’t have to belong to a wallet.  The response will include the transaction fee in Wei.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\PrepareTransactionsEVMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$type = 'legacy-transaction'; // string | Enum representation of the transaction type
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$prepareTransactionFromAddressEVMRB = new \CryptoapisApiClient\Model\PrepareTransactionFromAddressEVMRB(); // \CryptoapisApiClient\Model\PrepareTransactionFromAddressEVMRB

try {
    $result = $apiInstance->prepareTransactionFromAddressEVM($blockchain, $network, $type, $context, $prepareTransactionFromAddressEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepareTransactionsEVMsApi->prepareTransactionFromAddressEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **type** | **string**| Enum representation of the transaction type | [default to &#39;legacy-transaction&#39;] |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **prepareTransactionFromAddressEVMRB** | [**\CryptoapisApiClient\Model\PrepareTransactionFromAddressEVMRB**](../Model/PrepareTransactionFromAddressEVMRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\PrepareTransactionFromAddressEVMR**](../Model/PrepareTransactionFromAddressEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
