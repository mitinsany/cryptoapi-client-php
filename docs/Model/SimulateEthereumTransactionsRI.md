# # SimulateEthereumTransactionsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract** | **string** | String representation of contract address of the token that was transfered | [optional]
**gasLimit** | **int** | String representation of the transaction gas limit |
**gasUsed** | **int** | String representation of the transaction used gas | [optional]
**hash** | **string** | String representation of the transaction hash |
**inputData** | **string** | Hex data for contract interaction | [optional]
**internalTransactions** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRIInternalTransactionsInner[]**](SimulateEthereumTransactionsRIInternalTransactionsInner.md) | Internal transactions executed by transaction | [optional]
**nonce** | **int** | Numeric representation of the transaction nonce |
**positionInBlock** | **int** | Numeric representation of the transaction index |
**status** | **string** | Status of the transaction |
**timestamp** | **int** | Numeric representation of the timestamp in seconds since epoch |
**tokenTransfers** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRITokenTransfersInner[]**](SimulateEthereumTransactionsRITokenTransfersInner.md) | Token transfers executed by transaction | [optional]
**fee** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRIFee**](SimulateEthereumTransactionsRIFee.md) |  |
**gasPrice** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRIGasPrice**](SimulateEthereumTransactionsRIGasPrice.md) |  |
**maxFeePerGas** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRIMaxFeePerGas**](SimulateEthereumTransactionsRIMaxFeePerGas.md) |  | [optional]
**maxPriorityFeePerGas** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRIMaxPriorityFeePerGas**](SimulateEthereumTransactionsRIMaxPriorityFeePerGas.md) |  | [optional]
**minedInBlock** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRIMinedInBlock**](SimulateEthereumTransactionsRIMinedInBlock.md) |  |
**value** | [**\MitinSany/CryptoapisApiClient\Model\SimulateEthereumTransactionsRIValue**](SimulateEthereumTransactionsRIValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
