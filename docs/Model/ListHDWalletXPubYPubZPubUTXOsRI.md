# # ListHDWalletXPubYPubZPubUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Represents the public address, which is a compressed and shortened form of a public key. |
**addressPath** | **string** | Defines a data which tells a Hierarchical Deterministic wallet how to derive a specific key within a tree of keys. |
**derivation** | **string** | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. |
**index** | **int** | Represents the output index. It refers to the UTXO sequence in the transaction outputs (vout). |
**isAvailable** | **bool** | Represents if the UTXO has been used from another unconfirmed transaction. If it is - the value will be \&quot;false\&quot;. |
**isConfirmed** | **bool** | Represents the state of the transaction whether it is confirmed or not confirmed. |
**transactionId** | **string** | Represents the unique identifier of a transaction, i.e. it could be transactionId in UTXO-based protocols like Bitcoin, and transaction hash in Ethereum blockchain. |
**value** | [**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubUTXOsRIValue**](ListHDWalletXPubYPubZPubUTXOsRIValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
