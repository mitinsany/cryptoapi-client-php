# CryptoapisApiClient\BroadcastLocallySignTransactionsApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadcastLocallySignedTransaction()**](BroadcastLocallySignTransactionsApi.md#broadcastLocallySignedTransaction) | **POST** /broadcast-transactions/{blockchain}/{network} | Broadcast Locally Signed Transaction |


## `broadcastLocallySignedTransaction()`

```php
broadcastLocallySignedTransaction($blockchain, $network, $context, $broadcastLocallySignedTransactionRB): \CryptoapisApiClient\Model\BroadcastLocallySignedTransactionR
```

Broadcast Locally Signed Transaction

Through this endpoint customers can broadcast transactions that have been already signed locally. Instead of using a node for broadcasting a signed transaction users can use this endpoint. We then keep the user posted about the status by sending you a callback with a success or failure status.    {warning}This can be prepared and signed **only** locally, not through the API. We can provide support only for the process of broadcasting.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\BroadcastLocallySignTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$broadcastLocallySignedTransactionRB = new \CryptoapisApiClient\Model\BroadcastLocallySignedTransactionRB(); // \CryptoapisApiClient\Model\BroadcastLocallySignedTransactionRB

try {
    $result = $apiInstance->broadcastLocallySignedTransaction($blockchain, $network, $context, $broadcastLocallySignedTransactionRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastLocallySignTransactionsApi->broadcastLocallySignedTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **broadcastLocallySignedTransactionRB** | [**\CryptoapisApiClient\Model\BroadcastLocallySignedTransactionRB**](../Model/BroadcastLocallySignedTransactionRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\BroadcastLocallySignedTransactionR**](../Model/BroadcastLocallySignedTransactionR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
