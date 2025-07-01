# # GetBlockDetailsByBlockHashUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bits** | **int** | Numeric representation of the Block bits |
**chainwork** | **string** | Numeric representation of the expected number of hashes required to produce the chain up to this block |
**difficulty** | **int** | Numeric representation of the block difficulty |
**merkleRoot** | **string** | String representation of the block merkle root |
**size** | **int** | Numeric representation of the block size |
**version** | **int** | Numeric representation of the block version | [optional]
**hash** | **string** | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**height** | **int** | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
**nextBlockHash** | **string** | Represents the hash of the next block. When this is the last block of the blockchain this value will be an empty string. |
**previousBlockHash** | **string** | Represents the hash of the previous block, also known as the parent block. |
**strippedSize** | **int** | Defines the numeric representation of the block size excluding the witness data. |
**timestamp** | **int** | Defines the exact date/time when this block was mined in Unix Timestamp. |
**transactionsCount** | **int** | Represents the total number of all transactions as part of this block. |
**versionHex** | **string** | Is the hexadecimal string representation of the block&#39;s version. |
**weight** | **int** | Represents a measurement to compare the size of different transactions to each other in proportion to the block size limit. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
