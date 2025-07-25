# # AddressTokensTransactionConfirmedDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockchain** | **string** | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
**network** | **string** | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. |
**address** | **string** | Defines the specific address to which the transaction has been sent. |
**minedInBlock** | [**\MitinSany/CryptoapisApiClient\Model\AddressTokensTransactionConfirmedDataItemMinedInBlock**](AddressTokensTransactionConfirmedDataItemMinedInBlock.md) |  |
**transactionId** | **string** | Defines the unique ID of the specific transaction, i.e. its identification number. |
**tokenType** | **string** | Defines the type of token sent with the transaction, e.g. ERC 20. |
**token** | [**\MitinSany/CryptoapisApiClient\Model\AddressTokensTransactionConfirmedToken**](AddressTokensTransactionConfirmedToken.md) |  |
**direction** | **string** | Defines whether the transaction is \&quot;incoming\&quot; or \&quot;outgoing\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
