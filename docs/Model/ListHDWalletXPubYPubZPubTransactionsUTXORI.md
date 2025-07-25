# # ListHDWalletXPubYPubZPubTransactionsUTXORI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**positionInBlock** | **int** | Represents the index position of the transaction in the block. |
**recipients** | [**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsUTXORIRecipientsInner[]**](ListHDWalletXPubYPubZPubTransactionsUTXORIRecipientsInner.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | [**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsUTXORISendersInner[]**](ListHDWalletXPubYPubZPubTransactionsUTXORISendersInner.md) | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**fee** | [**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsUTXORIFee**](ListHDWalletXPubYPubZPubTransactionsUTXORIFee.md) |  |
**minedInBlock** | [**\MitinSany/CryptoapisApiClient\Model\ListHDWalletXPubYPubZPubTransactionsUTXORIMinedInBlock**](ListHDWalletXPubYPubZPubTransactionsUTXORIMinedInBlock.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
