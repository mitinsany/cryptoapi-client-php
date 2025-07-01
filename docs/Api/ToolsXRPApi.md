# MitinSany/CryptoapisApiClient\ToolsXRPApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**decodeXAddress()**](ToolsXRPApi.md#decodeXAddress) | **GET** /utils/{blockchain}/{network}/decode-x-address/{xAddress} | Decode X-Address |
| [**encodeXAddress()**](ToolsXRPApi.md#encodeXAddress) | **GET** /utils/{blockchain}/{network}/encode-x-address/{classicAddress}/{addressTag} | Encode X-Address |
| [**validateAddressXRP()**](ToolsXRPApi.md#validateAddressXRP) | **POST** /utils/xrp/{blockchain}/{network}/validate-address | Validate Address XRP |


## `decodeXAddress()`

```php
decodeXAddress($blockchain, $network, $xAddress, $context): \MitinSany/CryptoapisApiClient\Model\DecodeXAddressR
```

Decode X-Address

Through this endpoint, customers can decode an encoded XRP address with tag, by providing the specific x-address. The response includes the decoded classic address and the tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ToolsXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$xAddress = TVTMSyg6nRscAm2JtRd8hnpF9nD21CgZx6ibb9iy3EWHotV; // string | Represents the encoded classic address with its destination tag.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->decodeXAddress($blockchain, $network, $xAddress, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsXRPApi->decodeXAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;xrp&#39;] |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **xAddress** | **string**| Represents the encoded classic address with its destination tag. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\DecodeXAddressR**](../Model/DecodeXAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `encodeXAddress()`

```php
encodeXAddress($addressTag, $blockchain, $classicAddress, $network, $context): \MitinSany/CryptoapisApiClient\Model\EncodeXAddressR
```

Encode X-Address

Through this endpoint, customers can encode an encoded XRP address with tag, by providing the specific x-address. The response includes the encoded classic address and the tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ToolsXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressTag = 3999472835; // int | Defines a specific Tag that is an additional XRP address feature. It helps identifying a transaction recipient beyond a wallet address.
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$classicAddress = rA9bXGJcXvZKaWofrRphdJsBWzhyCfH3z; // string | Represents the public address, which is a compressed and shortened form of a public key.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->encodeXAddress($addressTag, $blockchain, $classicAddress, $network, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsXRPApi->encodeXAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addressTag** | **int**| Defines a specific Tag that is an additional XRP address feature. It helps identifying a transaction recipient beyond a wallet address. | |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;xrp&#39;] |
| **classicAddress** | **string**| Represents the public address, which is a compressed and shortened form of a public key. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\EncodeXAddressR**](../Model/EncodeXAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAddressXRP()`

```php
validateAddressXRP($blockchain, $network, $context, $validateAddressXRPRB): \MitinSany/CryptoapisApiClient\Model\ValidateAddressXRPR
```

Validate Address XRP

This endpoint checks user public addresses whether they are valid or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ToolsXRPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$validateAddressXRPRB = new \MitinSany/CryptoapisApiClient\Model\ValidateAddressXRPRB(); // \MitinSany/CryptoapisApiClient\Model\ValidateAddressXRPRB

try {
    $result = $apiInstance->validateAddressXRP($blockchain, $network, $context, $validateAddressXRPRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsXRPApi->validateAddressXRP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **validateAddressXRPRB** | [**\MitinSany/CryptoapisApiClient\Model\ValidateAddressXRPRB**](../Model/ValidateAddressXRPRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\ValidateAddressXRPR**](../Model/ValidateAddressXRPR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
