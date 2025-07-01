# # ListTransactionsByBlockHashXRPRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalData** | **string** | Represents any additional data that may be needed. | [optional]
**destinationTag** | **int** | Defines a specific Tag that is an additional XRP address feature. It helps identifying a transaction recipient beyond a wallet address. | [optional]
**hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**offer** | [**\CryptoapisApiClient\Model\ListTransactionsByBlockHashXRPRIOffer**](ListTransactionsByBlockHashXRPRIOffer.md) |  |
**positionInBlock** | **int** | Represents the index position of the transaction in the specific block. |
**recipient** | **string** | String representation of the transaction to address |
**sender** | **string** | String representation of the transaction from address |
**status** | **string** | Defines the status of the transaction. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**type** | **string** | Defines the type of the transaction. |
**fee** | [**\CryptoapisApiClient\Model\ListTransactionsByBlockHashXRPRIFee**](ListTransactionsByBlockHashXRPRIFee.md) |  |
**receive** | [**\CryptoapisApiClient\Model\ListTransactionsByBlockHashXRPRIReceive**](ListTransactionsByBlockHashXRPRIReceive.md) |  |
**value** | [**\CryptoapisApiClient\Model\ListTransactionsByBlockHashXRPRIValue**](ListTransactionsByBlockHashXRPRIValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
