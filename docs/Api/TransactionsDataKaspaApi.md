# CryptoapisApiClient\TransactionsDataKaspaApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransactionDetailsByTransactionIdKaspa()**](TransactionsDataKaspaApi.md#getTransactionDetailsByTransactionIdKaspa) | **GET** /transactions/kaspa/{network}/{transactionId} | Get Transaction Details By Transaction Id Kaspa |


## `getTransactionDetailsByTransactionIdKaspa()`

```php
getTransactionDetailsByTransactionIdKaspa($network, $transactionId, $context): \CryptoapisApiClient\Model\GetTransactionDetailsByTransactionIdKaspaR
```

Get Transaction Details By Transaction Id Kaspa

Through this endpoint customers can obtain details about a signature by the transaction's unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\TransactionsDataKaspaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software
$transactionId = 794af341e2fc00b732a60a4fb5ee238c6289fec30c21bbadf326cc448d2c312e; // string | String identifier of the transaction ID
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getTransactionDetailsByTransactionIdKaspa($network, $transactionId, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsDataKaspaApi->getTransactionDetailsByTransactionIdKaspa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software | |
| **transactionId** | **string**| String identifier of the transaction ID | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionIdKaspaR**](../Model/GetTransactionDetailsByTransactionIdKaspaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
