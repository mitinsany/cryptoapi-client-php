# CryptoapisApiClient\SimulateTransactionsEVMApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**simulateEthereumTransactions()**](SimulateTransactionsEVMApi.md#simulateEthereumTransactions) | **POST** /simulate-transactions/evm/ethereum/{network} | Simulate Ethereum Transactions |


## `simulateEthereumTransactions()`

```php
simulateEthereumTransactions($network, $context, $simulateEthereumTransactionsRB): \CryptoapisApiClient\Model\SimulateEthereumTransactionsR
```

Simulate Ethereum Transactions

Through this endpoint the customer can Simulate transactions and know in advance how they will behave onchain without paying a on chain fee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\SimulateTransactionsEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$simulateEthereumTransactionsRB = new \CryptoapisApiClient\Model\SimulateEthereumTransactionsRB(); // \CryptoapisApiClient\Model\SimulateEthereumTransactionsRB

try {
    $result = $apiInstance->simulateEthereumTransactions($network, $context, $simulateEthereumTransactionsRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateTransactionsEVMApi->simulateEthereumTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **simulateEthereumTransactionsRB** | [**\CryptoapisApiClient\Model\SimulateEthereumTransactionsRB**](../Model/SimulateEthereumTransactionsRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\SimulateEthereumTransactionsR**](../Model/SimulateEthereumTransactionsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
