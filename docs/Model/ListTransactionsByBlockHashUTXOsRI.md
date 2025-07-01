# # ListTransactionsByBlockHashUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. |
**size** | **int** | Represents the total size of this transaction. |
**version** | **int** | Numeric representation of the transaction Represents the transaction version number. |
**fee** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHashUTXOsRIFee**](ListTransactionsByBlockHashUTXOsRIFee.md) |  |
**hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**inputs** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHashUTXOsRIInputsInner[]**](ListTransactionsByBlockHashUTXOsRIInputsInner.md) | Object Array representation of transaction inputs |
**outputs** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHashUTXOsRIOutputsInner[]**](ListTransactionsByBlockHashUTXOsRIOutputsInner.md) | Object Array representation of transaction outputs |
**positionInBlock** | **int** | Represents the index position of the transaction in the specific block. |
**recipients** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHashUTXOsRIRecipientsInner[]**](ListTransactionsByBlockHashUTXOsRIRecipientsInner.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHashUTXOsRISendersInner[]**](ListTransactionsByBlockHashUTXOsRISendersInner.md) | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**blockchainSpecific** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHashUTXOsRIBSZ**](ListTransactionsByBlockHashUTXOsRIBSZ.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
