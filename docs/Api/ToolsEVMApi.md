# CryptoapisApiClient\ToolsEVMApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**decodeRawTransactionHexEVM()**](ToolsEVMApi.md#decodeRawTransactionHexEVM) | **POST** /utils/evm/{blockchain}/{network}/decode-raw-transaction | Decode Raw Transaction Hex EVM |
| [**validateAddressEVM()**](ToolsEVMApi.md#validateAddressEVM) | **POST** /utils/evm/{blockchain}/{network}/validate-address | Validate Address EVM |


## `decodeRawTransactionHexEVM()`

```php
decodeRawTransactionHexEVM($blockchain, $network, $context, $decodeRawTransactionHexEVMRB): \CryptoapisApiClient\Model\DecodeRawTransactionHexEVMR
```

Decode Raw Transaction Hex EVM

Through this endpoint customers can decode a raw transaction hex and see the decoded transactions' details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\ToolsEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$decodeRawTransactionHexEVMRB = new \CryptoapisApiClient\Model\DecodeRawTransactionHexEVMRB(); // \CryptoapisApiClient\Model\DecodeRawTransactionHexEVMRB

try {
    $result = $apiInstance->decodeRawTransactionHexEVM($blockchain, $network, $context, $decodeRawTransactionHexEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsEVMApi->decodeRawTransactionHexEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **decodeRawTransactionHexEVMRB** | [**\CryptoapisApiClient\Model\DecodeRawTransactionHexEVMRB**](../Model/DecodeRawTransactionHexEVMRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\DecodeRawTransactionHexEVMR**](../Model/DecodeRawTransactionHexEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAddressEVM()`

```php
validateAddressEVM($blockchain, $network, $context, $validateAddressEVMRB): \CryptoapisApiClient\Model\ValidateAddressEVMR
```

Validate Address EVM

This endpoint checks user public addresses whether they are valid or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\ToolsEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$validateAddressEVMRB = new \CryptoapisApiClient\Model\ValidateAddressEVMRB(); // \CryptoapisApiClient\Model\ValidateAddressEVMRB

try {
    $result = $apiInstance->validateAddressEVM($blockchain, $network, $context, $validateAddressEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsEVMApi->validateAddressEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **validateAddressEVMRB** | [**\CryptoapisApiClient\Model\ValidateAddressEVMRB**](../Model/ValidateAddressEVMRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\ValidateAddressEVMR**](../Model/ValidateAddressEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
