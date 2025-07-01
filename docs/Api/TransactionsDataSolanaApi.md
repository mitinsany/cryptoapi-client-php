# CryptoapisApiClient\TransactionsDataSolanaApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransactionDetailsByTransactionHashSolana()**](TransactionsDataSolanaApi.md#getTransactionDetailsByTransactionHashSolana) | **GET** /transactions/solana/{network}/{signature}/details | Get Transaction Details By Transaction Hash Solana |


## `getTransactionDetailsByTransactionHashSolana()`

```php
getTransactionDetailsByTransactionHashSolana($network, $signature, $context): \CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashSolanaR
```

Get Transaction Details By Transaction Hash Solana

Through this endpoint customers can obtain details about a signature by the transaction's unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\TransactionsDataSolanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software
$signature = 2KGuERep8VNbpDbyLxxXKV8uFik5ECSx5zrRAgUyzAbGCXGVg2Xb62Yda8TVD3xjxsmGkSNDSm5cVstgLjfnmte5; // string | String representation of the transaction's signature
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getTransactionDetailsByTransactionHashSolana($network, $signature, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsDataSolanaApi->getTransactionDetailsByTransactionHashSolana: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software | |
| **signature** | **string**| String representation of the transaction&#39;s signature | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashSolanaR**](../Model/GetTransactionDetailsByTransactionHashSolanaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
