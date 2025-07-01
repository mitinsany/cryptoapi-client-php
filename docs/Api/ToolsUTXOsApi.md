# MitinSany/CryptoapisApiClient\ToolsUTXOsApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**decodeRawTransactionHexUTXO()**](ToolsUTXOsApi.md#decodeRawTransactionHexUTXO) | **POST** /utils/utxo/{blockchain}/{network}/decode-raw-transaction | Decode Raw Transaction Hex UTXO |
| [**validateAddressUTXO()**](ToolsUTXOsApi.md#validateAddressUTXO) | **POST** /utils/utxo/{blockchain}/{network}/validate-address | Validate Address UTXO |


## `decodeRawTransactionHexUTXO()`

```php
decodeRawTransactionHexUTXO($blockchain, $network, $context, $decodeRawTransactionHexUTXORB): \MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexUTXOR
```

Decode Raw Transaction Hex UTXO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ToolsUTXOsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string
$network = mainnet; // string
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$decodeRawTransactionHexUTXORB = new \MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexUTXORB(); // \MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexUTXORB

try {
    $result = $apiInstance->decodeRawTransactionHexUTXO($blockchain, $network, $context, $decodeRawTransactionHexUTXORB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsUTXOsApi->decodeRawTransactionHexUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**|  | |
| **network** | **string**|  | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **decodeRawTransactionHexUTXORB** | [**\MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexUTXORB**](../Model/DecodeRawTransactionHexUTXORB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexUTXOR**](../Model/DecodeRawTransactionHexUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAddressUTXO()`

```php
validateAddressUTXO($blockchain, $network, $context, $validateAddressUTXORB): \MitinSany/CryptoapisApiClient\Model\ValidateAddressUTXOR
```

Validate Address UTXO

This endpoint checks user public addresses whether they are valid or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ToolsUTXOsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$validateAddressUTXORB = new \MitinSany/CryptoapisApiClient\Model\ValidateAddressUTXORB(); // \MitinSany/CryptoapisApiClient\Model\ValidateAddressUTXORB

try {
    $result = $apiInstance->validateAddressUTXO($blockchain, $network, $context, $validateAddressUTXORB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsUTXOsApi->validateAddressUTXO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **validateAddressUTXORB** | [**\MitinSany/CryptoapisApiClient\Model\ValidateAddressUTXORB**](../Model/ValidateAddressUTXORB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ValidateAddressUTXOR**](../Model/ValidateAddressUTXOR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
