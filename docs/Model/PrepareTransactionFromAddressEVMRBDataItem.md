# # PrepareTransactionFromAddressEVMRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalData** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request. | [optional]
**amount** | **string** | Representation of the transacted amount |
**nonce** | **string** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. | [optional]
**recipient** | **string** | The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient. |
**sender** | **string** | Represents the address which sends this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one sender. |
**fee** | [**\CryptoapisApiClient\Model\PrepareTransactionFromAddressEVMRBDataItemFee**](PrepareTransactionFromAddressEVMRBDataItemFee.md) |  |
**type** | **string** | Representation of the transaction type. For Ethereum-Classic and Binance Smart Chain there is no need to provide \&quot;transactionType\&quot; in the request. | [optional] [default to 'gas-fee-market-transaction']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
