# MitinSany/CryptoapisApiClient\BlockchainFeesEVMApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**estimateNativeCoinTransferGasLimitEVM()**](BlockchainFeesEVMApi.md#estimateNativeCoinTransferGasLimitEVM) | **POST** /blockchain-fees/evm/{blockchain}/{network}/estimate-native-coin-transfer-gas-limit | Estimate Native Coin Transfer Gas Limit EVM |
| [**estimateTokenTransferGasLimitEVM()**](BlockchainFeesEVMApi.md#estimateTokenTransferGasLimitEVM) | **POST** /blockchain-fees/evm/{blockchain}/{network}/estimate-token-transfer-gas-limit | Estimate Token Transfer Gas Limit EVM |
| [**getEIP1559FeeRecommendationsEVM()**](BlockchainFeesEVMApi.md#getEIP1559FeeRecommendationsEVM) | **GET** /blockchain-fees/evm/{blockchain}/{network}/eip-1559 | Get EIP 1559 Fee Recommendations EVM |
| [**getFeeRecommendationsEVM()**](BlockchainFeesEVMApi.md#getFeeRecommendationsEVM) | **GET** /blockchain-fees/evm/{blockchain}/{network}/mempool | Get Fee Recommendations EVM |


## `estimateNativeCoinTransferGasLimitEVM()`

```php
estimateNativeCoinTransferGasLimitEVM($blockchain, $network, $context, $estimateNativeCoinTransferGasLimitEVMRB): \MitinSany/CryptoapisApiClient\Model\EstimateNativeCoinTransferGasLimitEVMR
```

Estimate Native Coin Transfer Gas Limit EVM

This endpoint helps customer in estimating the gas limit needed for a transaction. It gives information for gas expenses when sending ether to contracts or making a transaction with additional data in it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\BlockchainFeesEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$estimateNativeCoinTransferGasLimitEVMRB = new \MitinSany/CryptoapisApiClient\Model\EstimateNativeCoinTransferGasLimitEVMRB(); // \MitinSany/CryptoapisApiClient\Model\EstimateNativeCoinTransferGasLimitEVMRB

try {
    $result = $apiInstance->estimateNativeCoinTransferGasLimitEVM($blockchain, $network, $context, $estimateNativeCoinTransferGasLimitEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainFeesEVMApi->estimateNativeCoinTransferGasLimitEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **estimateNativeCoinTransferGasLimitEVMRB** | [**\MitinSany/CryptoapisApiClient\Model\EstimateNativeCoinTransferGasLimitEVMRB**](../Model/EstimateNativeCoinTransferGasLimitEVMRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\EstimateNativeCoinTransferGasLimitEVMR**](../Model/EstimateNativeCoinTransferGasLimitEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateTokenTransferGasLimitEVM()`

```php
estimateTokenTransferGasLimitEVM($blockchain, $network, $context, $estimateTokenTransferGasLimitEVMRB): \MitinSany/CryptoapisApiClient\Model\EstimateTokenTransferGasLimitEVMR
```

Estimate Token Transfer Gas Limit EVM

This endpoint helps customer in estimating the Contract Gas Limit needed for a transaction. It gives information for gas expenses for a specific contract when sending ethers or making a transaction with additional data in it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\BlockchainFeesEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$estimateTokenTransferGasLimitEVMRB = new \MitinSany/CryptoapisApiClient\Model\EstimateTokenTransferGasLimitEVMRB(); // \MitinSany/CryptoapisApiClient\Model\EstimateTokenTransferGasLimitEVMRB

try {
    $result = $apiInstance->estimateTokenTransferGasLimitEVM($blockchain, $network, $context, $estimateTokenTransferGasLimitEVMRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainFeesEVMApi->estimateTokenTransferGasLimitEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **estimateTokenTransferGasLimitEVMRB** | [**\MitinSany/CryptoapisApiClient\Model\EstimateTokenTransferGasLimitEVMRB**](../Model/EstimateTokenTransferGasLimitEVMRB.md)|  | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\EstimateTokenTransferGasLimitEVMR**](../Model/EstimateTokenTransferGasLimitEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEIP1559FeeRecommendationsEVM()`

```php
getEIP1559FeeRecommendationsEVM($network, $blockchain, $context): \MitinSany/CryptoapisApiClient\Model\GetEIP1559FeeRecommendationsEVMR
```

Get EIP 1559 Fee Recommendations EVM

Through this endpoint customers can obtain fee recommendations specifically for EIP 1559.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\BlockchainFeesEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while network like \"testnet\" is a test network.
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getEIP1559FeeRecommendationsEVM($network, $blockchain, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainFeesEVMApi->getEIP1559FeeRecommendationsEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while network like \&quot;testnet\&quot; is a test network. | |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetEIP1559FeeRecommendationsEVMR**](../Model/GetEIP1559FeeRecommendationsEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeeRecommendationsEVM()`

```php
getFeeRecommendationsEVM($blockchain, $network, $context): \MitinSany/CryptoapisApiClient\Model\GetFeeRecommendationsEVMR
```

Get Fee Recommendations EVM

Through this endpoint customers can obtain fee recommendations. Our fees recommendations are based on Mempool data which makes them much more accurate than fees based on already mined blocks. Calculations are done in real time live.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\BlockchainFeesEVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name
$network = sepolia; // string | Represents the name of the blockchain network used
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getFeeRecommendationsEVM($blockchain, $network, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainFeesEVMApi->getFeeRecommendationsEVM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name | |
| **network** | **string**| Represents the name of the blockchain network used | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetFeeRecommendationsEVMR**](../Model/GetFeeRecommendationsEVMR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
