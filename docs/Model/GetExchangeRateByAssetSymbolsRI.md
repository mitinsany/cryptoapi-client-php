# # GetExchangeRateByAssetSymbolsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**calculationTimestamp** | **int** | Defines the time of the market data used to calculate the exchange rate in UNIX Timestamp. Oldest possible timestamp is 30 days. |
**fromAssetId** | **string** | Defines the base asset Reference ID to get a rate for. |
**fromAssetSymbol** | **string** | Defines the base asset symbol to get a rate for. |
**rate** | **string** | Defines the exchange rate between assets calculated by weighted average of the last trades in every exchange for the last 24 hours by giving more weight to exchanges with higher volume. |
**toAssetId** | **string** | Defines the relation asset Reference ID in which the base asset rate will be displayed. |
**toAssetSymbol** | **string** | Defines the relation asset symbol in which the base asset rate will be displayed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
