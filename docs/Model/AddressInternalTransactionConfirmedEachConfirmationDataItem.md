# # AddressInternalTransactionConfirmedEachConfirmationDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockchain** | **string** | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
**network** | **string** | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. |
**address** | **string** | Defines the specific address of the internal transaction. |
**minedInBlock** | [**\MitinSany/CryptoapisApiClient\Model\AddressInternalTransactionConfirmedEachConfirmationDataItemMinedInBlock**](AddressInternalTransactionConfirmedEachConfirmationDataItemMinedInBlock.md) |  |
**parentTransactionId** | **string** | Defines the Parent Transaction&#39;s unique ID. |
**operationId** | **string** | Defines the specific operation&#39;s unique ID. |
**currentConfirmations** | **int** | Defines the number of currently received confirmations for the transaction. |
**targetConfirmations** | **int** | Defines the number of confirmation transactions requested as callbacks, i.e. the system can notify till the n-th confirmation. |
**amount** | **string** | Defines the amount of coins sent with the confirmed transaction. |
**unit** | **string** | Defines the unit of the transaction, e.g. Gwei. |
**direction** | **string** | Defines whether the transaction is \&quot;incoming\&quot; or \&quot;outgoing\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
