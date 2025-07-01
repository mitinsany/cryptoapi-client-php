# # PrepareANonFungibleTokenTransferFromAddressEVMRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inputData** | **string** | 0x0079006f00750072004100640064006900740069006f006e0061006c00440061007400610048006500720065 |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**recipient** | **string** | Represents the address which sends this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one sender. |
**sender** | **string** | The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient. |
**sigHash** | **string** | Representation of the hash that should be signed |
**value** | [**\CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMRIValue**](PrepareANonFungibleTokenTransferFromAddressEVMRIValue.md) |  |
**fee** | [**\CryptoapisApiClient\Model\PrepareANonFungibleTokenTransferFromAddressEVMRIFee**](PrepareANonFungibleTokenTransferFromAddressEVMRIFee.md) |  |
**gasLimit** | **int** | Represents the amount of gas used by this specific transaction alone. |
**type** | **string** | Representation of the transaction type |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
