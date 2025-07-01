# MitinSany/CryptoapisApiClient\ToolsApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertBitcoinCashAddress()**](ToolsApi.md#convertBitcoinCashAddress) | **POST** /utils/bitcoin-cash/{network}/convert-address | Convert Bitcoin Cash Address |


## `convertBitcoinCashAddress()`

```php
convertBitcoinCashAddress($blockchain, $network, $context, $convertBitcoinCashAddressRB): \MitinSany/CryptoapisApiClient\Model\ConvertBitcoinCashAddressR
```

Convert Bitcoin Cash Address

Through this endpoint customers will be able to convert addresses for the BCH (Bitcoin Cash) protocol from BCH legacy to cash address and vice versa.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin-cash; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$convertBitcoinCashAddressRB = new \MitinSany/CryptoapisApiClient\Model\ConvertBitcoinCashAddressRB(); // \MitinSany/CryptoapisApiClient\Model\ConvertBitcoinCashAddressRB

try {
    $result = $apiInstance->convertBitcoinCashAddress($blockchain, $network, $context, $convertBitcoinCashAddressRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->convertBitcoinCashAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;bitcoin-cash&#39;] |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **convertBitcoinCashAddressRB** | [**\MitinSany/CryptoapisApiClient\Model\ConvertBitcoinCashAddressRB**](../Model/ConvertBitcoinCashAddressRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ConvertBitcoinCashAddressR**](../Model/ConvertBitcoinCashAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
