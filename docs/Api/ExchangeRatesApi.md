# MitinSany/CryptoapisApiClient\ExchangeRatesApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getExchangeRateByAssetSymbols()**](ExchangeRatesApi.md#getExchangeRateByAssetSymbols) | **GET** /market-data/exchange-rates/by-symbol/{fromAssetSymbol}/{toAssetSymbol} | Get Exchange Rate By Asset Symbols |
| [**getExchangeRateByAssetsIDs()**](ExchangeRatesApi.md#getExchangeRateByAssetsIDs) | **GET** /market-data/exchange-rates/by-id/{fromAssetId}/{toAssetId} | Get Exchange Rate By Assets IDs |


## `getExchangeRateByAssetSymbols()`

```php
getExchangeRateByAssetSymbols($fromAssetSymbol, $toAssetSymbol, $context, $calculationTimestamp): \MitinSany/CryptoapisApiClient\Model\GetExchangeRateByAssetSymbolsR
```

Get Exchange Rate By Asset Symbols

Through this endpoint customers can obtain exchange rates by asset symbols. The process represents the exchange rate value of a single unit of one asset versus another one. Data is provided per unique asset symbol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromAssetSymbol = btc; // string | Defines the base asset symbol to get a rate for.
$toAssetSymbol = usd; // string | Defines the relation asset symbol in which the base asset rate will be displayed.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$calculationTimestamp = 1635514425; // int | Defines the time of the market data used to calculate the exchange rate in UNIX Timestamp. Oldest possible timestamp is 30 days.

try {
    $result = $apiInstance->getExchangeRateByAssetSymbols($fromAssetSymbol, $toAssetSymbol, $context, $calculationTimestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeRatesApi->getExchangeRateByAssetSymbols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromAssetSymbol** | **string**| Defines the base asset symbol to get a rate for. | |
| **toAssetSymbol** | **string**| Defines the relation asset symbol in which the base asset rate will be displayed. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **calculationTimestamp** | **int**| Defines the time of the market data used to calculate the exchange rate in UNIX Timestamp. Oldest possible timestamp is 30 days. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetExchangeRateByAssetSymbolsR**](../Model/GetExchangeRateByAssetSymbolsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeRateByAssetsIDs()`

```php
getExchangeRateByAssetsIDs($fromAssetId, $toAssetId, $context, $calculationTimestamp): \MitinSany/CryptoapisApiClient\Model\GetExchangeRateByAssetsIDsR
```

Get Exchange Rate By Assets IDs

Through this endpoint customers can obtain exchange rates by asset IDs. The process represents the exchange rate value of a single unit of one asset versus another one. Data is provided per unique asset Reference ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\ExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromAssetId = 5b1ea92e584bf50020130612; // string | Defines the base asset Reference ID to get a rate for.
$toAssetId = 5b1ea92e584bf50020130615; // string | Defines the relation asset Reference ID in which the base asset rate will be displayed.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$calculationTimestamp = 1618577849; // int | Defines the time of the market data used to calculate the exchange rate in UNIX Timestamp. Oldest possible timestamp is 30 days.

try {
    $result = $apiInstance->getExchangeRateByAssetsIDs($fromAssetId, $toAssetId, $context, $calculationTimestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeRatesApi->getExchangeRateByAssetsIDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromAssetId** | **string**| Defines the base asset Reference ID to get a rate for. | |
| **toAssetId** | **string**| Defines the relation asset Reference ID in which the base asset rate will be displayed. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **calculationTimestamp** | **int**| Defines the time of the market data used to calculate the exchange rate in UNIX Timestamp. Oldest possible timestamp is 30 days. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\GetExchangeRateByAssetsIDsR**](../Model/GetExchangeRateByAssetsIDsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
