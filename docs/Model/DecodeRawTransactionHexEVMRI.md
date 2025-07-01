# # DecodeRawTransactionHexEVMRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Represents the decoded transaction hex. |
**gasLimit** | **int** | Represents the amount of gas used by this specific transaction alone. |
**gasPaidForData** | **int** | Represents the amount of gas paid for the data in the transaction. |
**inputData** | **string** | Represents additional information that is required for the transaction. |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. |
**r** | **string** | Represents output of an ECDSA signature. |
**recipient** | **string** | The address which receives this transaction |
**s** | **string** | Represents output of an ECDSA signature. |
**sender** | **string** | Represents the address which sends this transaction |
**type** | **int** | Specifies the transaction type as one from three options: if response returns a \&quot;0\&quot; it means the raw transaction includes legacy transaction data, if it is \&quot;1\&quot; - includes access lists for EIP2930, and if it is \&quot;2\&quot; - EIP1559 data. |
**v** | **string** | Defines the the recovery id. |
**fee** | [**\MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexEVMRIFee**](DecodeRawTransactionHexEVMRIFee.md) |  |
**gasPrice** | [**\MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexEVMRIGasPrice**](DecodeRawTransactionHexEVMRIGasPrice.md) |  |
**value** | [**\MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexEVMRIValue**](DecodeRawTransactionHexEVMRIValue.md) |  |
**blockchainSpecific** | [**\MitinSany/CryptoapisApiClient\Model\DecodeRawTransactionHexEVMRIBSE**](DecodeRawTransactionHexEVMRIBSE.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
