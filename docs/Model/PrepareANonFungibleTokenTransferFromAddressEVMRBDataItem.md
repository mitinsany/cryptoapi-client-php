# # PrepareANonFungibleTokenTransferFromAddressEVMRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract** | **string** | Represents the contract address of the token, which controls its logic. It is not the address that holds the tokens. |
**nonce** | **string** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. | [optional]
**recipient** | **string** | The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient. |
**sender** | **string** | Represents the address which sends this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one sende |
**tokenId** | **string** | Represents the unique token identifier. |
**fee** | [**\CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMRBDataItemFee**](PrepareANonFungibleTokenTransferFromAddressEVMRBDataItemFee.md) |  |
**type** | **string** | Representation of the transaction type. For Ethereum-Classic and Binance Smart Chain there is no need to provide \&quot;type\&quot; in the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
