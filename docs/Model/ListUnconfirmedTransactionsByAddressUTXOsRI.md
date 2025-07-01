# # ListUnconfirmedTransactionsByAddressUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**locktime** | **int** | Numeric representation of the transaction locktime |
**size** | **int** | Numeric representation of the transaction size |
**version** | **int** | Numeric representation of the transaction version |
**hash** | **string** | String representation of the transaction hash |
**inputs** | [**\CryptoapisApiClient\Model\ListUnconfirmedTransactionsByAddressUTXOsRIInputsInner[]**](ListUnconfirmedTransactionsByAddressUTXOsRIInputsInner.md) | Object Array representation of transaction inputs |
**outputs** | [**\CryptoapisApiClient\Model\ListUnconfirmedTransactionsByAddressUTXOsRIOutputsInner[]**](ListUnconfirmedTransactionsByAddressUTXOsRIOutputsInner.md) | Object Array representation of transaction outputs |
**recipients** | [**\CryptoapisApiClient\Model\ListUnconfirmedTransactionsByAddressUTXOsRIRecipientsInner[]**](ListUnconfirmedTransactionsByAddressUTXOsRIRecipientsInner.md) | Represents a list of recipient addresses with the respective amounts. |
**senders** | [**\CryptoapisApiClient\Model\ListUnconfirmedTransactionsByAddressUTXOsRISendersInner[]**](ListUnconfirmedTransactionsByAddressUTXOsRISendersInner.md) | Object Array representation of transaction senders |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**blockchainSpecific** | [**\CryptoapisApiClient\Model\ListUnconfirmedTransactionsByAddressUTXOsRIBSZ**](ListUnconfirmedTransactionsByAddressUTXOsRIBSZ.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
