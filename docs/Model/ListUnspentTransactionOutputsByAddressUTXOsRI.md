# # ListUnspentTransactionOutputsByAddressUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Represents the address that has unspend funds per which the result is returned. |
**index** | **int** | Represents the index position of the transaction in the block. |
**isAvailable** | **bool** | Represents if the UTXO has been used from another unconfirmed transaction. If it is - the value will be \&quot;false\&quot;. |
**isConfirmed** | **bool** | Represents the state of the transaction whether it is confirmed or not confirmed. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transactionId** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**value** | [**\MitinSany/CryptoapisApiClient\Model\ListUnspentTransactionOutputsByAddressUTXOsRIValue**](ListUnspentTransactionOutputsByAddressUTXOsRIValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
