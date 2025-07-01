# # ListLatestMinedBlocksUTXOsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bits** | **int** | Numeric representation of the Block bits |
**chainwork** | **int** | Numeric representation of the expected number of hashes required to produce the chain up to this block |
**difficulty** | **int** | Numeric representation of the block difficulty |
**merkleRoot** | **string** | String representation of the block merkle root |
**size** | **int** | Numeric representation of the block size |
**version** | **int** | Numeric representation of the block version |
**hash** | **string** | Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions. |
**height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**nextBlockHash** | **string** | String representation of the next block hash | [optional]
**previousBlockHash** | **string** | Represents the hash of the previous block, also known as the parent block. |
**strippedSize** | **int** | Defines the numeric representation of the block size excluding the witness data. |
**timestamp** | **int** | Defines the exact date/time when this block was mined in Unix Timestamp. |
**transactionsCount** | **int** | Represents the total number of all transactions as part of this block. |
**versionHex** | **string** | Is the hexadecimal string representation of the block&#39;s version. |
**weight** | **int** | Represents a measurement to compare the size of different transactions to each other in proportion to the block size limit. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
