# # GetTransactionDetailsByTransactionHashXRPRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalData** | **string** | Represents additional data that may be needed. |
**destinationTag** | **int** |  | [optional]
**fee** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashXRPRIFee**](GetTransactionDetailsByTransactionHashXRPRIFee.md) |  |
**hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**offer** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashXRPRIOffer**](GetTransactionDetailsByTransactionHashXRPRIOffer.md) |  |
**positionInBlock** | **string** | Defines the index of the transaction, i.e. the consecutive place it takes in the blockchain. |
**receive** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashXRPRIReceive**](GetTransactionDetailsByTransactionHashXRPRIReceive.md) |  |
**recipient** | **string** | String representation of the movement recipient address |
**sender** | **string** | String representation of the movement sender address |
**status** | **string** | Defines the status of the transaction. | [optional]
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**type** | **string** | Defines the type of the transaction. |
**value** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashXRPRIValue**](GetTransactionDetailsByTransactionHashXRPRIValue.md) |  |
**minedInBlock** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashXRPRIMinedInBlock**](GetTransactionDetailsByTransactionHashXRPRIMinedInBlock.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
