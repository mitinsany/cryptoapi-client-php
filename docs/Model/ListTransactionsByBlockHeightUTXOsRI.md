# # ListTransactionsByBlockHeightUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**locktime** | **int** | Numeric representation of the transaction locktime |
**size** | **int** | Numeric representation of the transaction size |
**version** | **int** | Numeric representation of the transaction version |
**fee** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHeightUTXOsRIFee**](ListTransactionsByBlockHeightUTXOsRIFee.md) |  |
**hash** | **string** | Represents the unique identifier of a transaction |
**inputs** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHeightUTXOsRIInputsInner[]**](ListTransactionsByBlockHeightUTXOsRIInputsInner.md) | Object Array representation of transaction inputs |
**outputs** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHeightUTXOsRIOutputsInner[]**](ListTransactionsByBlockHeightUTXOsRIOutputsInner.md) | Object Array representation of transaction outputs |
**positionInBlock** | **int** | Numeric representation of the transaction index |
**recipients** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHeightUTXOsRIRecipientsInner[]**](ListTransactionsByBlockHeightUTXOsRIRecipientsInner.md) | Object Array representation of transaction receivers |
**senders** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHeightUTXOsRISendersInner[]**](ListTransactionsByBlockHeightUTXOsRISendersInner.md) | Object Array representation of transaction senders |
**blockchainSpecific** | [**\MitinSany/CryptoapisApiClient\Model\ListTransactionsByBlockHeightUTXOsRIBSZ**](ListTransactionsByBlockHeightUTXOsRIBSZ.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
