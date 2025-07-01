# # GetTransactionDetailsByTransactionHashUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isConfirmed** | **bool** | Boolean representation of if the transaction is mined |
**locktime** | **int** | Numeric representation of the transaction locktime |
**size** | **int** | Numeric representation of the transaction size |
**transactionID** | **string** | String representation of the transaction identifier (txid) |
**version** | **int** | Numeric representation of the transaction version |
**fee** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashUTXOsRIFee**](GetTransactionDetailsByTransactionHashUTXOsRIFee.md) |  |
**hash** | **string** | String representation of the weight |
**inputs** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashUTXOsRIInputsInner[]**](GetTransactionDetailsByTransactionHashUTXOsRIInputsInner.md) | Object Array representation of transaction inputs |
**outputs** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashUTXOsRIOutputsInner[]**](GetTransactionDetailsByTransactionHashUTXOsRIOutputsInner.md) | Object Array representation of transaction outputs |
**positionInBlock** | **int** | Numeric representation of the transaction index |
**recipients** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashUTXOsRIRecipientsInner[]**](GetTransactionDetailsByTransactionHashUTXOsRIRecipientsInner.md) | Object Array representation of transaction receivers |
**senders** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashUTXOsRISendersInner[]**](GetTransactionDetailsByTransactionHashUTXOsRISendersInner.md) | Object Array representation of transaction senders |
**timestamp** | **int** | Numeric representation of the timestamp in seconds since epoch |
**minedInBlock** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashUTXOsRIMinedInBlock**](GetTransactionDetailsByTransactionHashUTXOsRIMinedInBlock.md) |  |
**blockchainSpecific** | [**\CryptoapisApiClient\Model\GetTransactionDetailsByTransactionHashUTXOsRIBSZ**](GetTransactionDetailsByTransactionHashUTXOsRIBSZ.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
