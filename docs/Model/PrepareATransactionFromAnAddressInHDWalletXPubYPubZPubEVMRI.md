# # PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**derivationIndex** | **int** | Representation of the derivation index of the xpub address |
**inputData** | **string** | Representation of the data in hex value |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**recipient** | **string** | Represents a recipient addresses. In account-based protocols like Ethereum there is only one address in this list. |
**sender** | **string** | Represents a sender address with the respective amount. In account-based protocols like Ethereum there is only one address in this list. |
**sigHash** | **string** | Representation of the hash that should be signed. |
**value** | [**\CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIValue**](PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIValue.md) |  |
**fee** | [**\CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIFee**](PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIFee.md) |  |
**type** | **string** | Representation of the transaction type |
**gasLimit** | **int** | Represents the amount of gas used by this specific transaction alone. |
**gasPrice** | **int** | Represents the price offered to the miner to purchase this amount of gas. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
