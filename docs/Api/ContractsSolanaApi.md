# CryptoapisApiClient\ContractsSolanaApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTokenDetailsByContractAddressSolana()**](ContractsSolanaApi.md#getTokenDetailsByContractAddressSolana) | **GET** /contracts/solana/{network}/{contractAddress}/token-details | Get Token Details by Contract Address Solana |


## `getTokenDetailsByContractAddressSolana()`

```php
getTokenDetailsByContractAddressSolana($network, $contractAddress, $context): \CryptoapisApiClient\Model\GetTokenDetailsByContractAddressSolanaR
```

Get Token Details by Contract Address Solana

Though this endpoint customers can obtain information about token details. This can be done by providing the `contact address` parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\ContractsSolanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software
$contractAddress = Dn4noZ5jgGfkntzcQSUZ8czkreiZ1ForXYoV2H8Dm7S1; // string | Defines the specific address of the contract.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getTokenDetailsByContractAddressSolana($network, $contractAddress, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsSolanaApi->getTokenDetailsByContractAddressSolana: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software | |
| **contractAddress** | **string**| Defines the specific address of the contract. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\CryptoapisApiClient\Model\GetTokenDetailsByContractAddressSolanaR**](../Model/GetTokenDetailsByContractAddressSolanaR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
