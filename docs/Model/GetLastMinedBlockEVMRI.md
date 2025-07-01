# # GetLastMinedBlockEVMRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size** | **int** | Represents the total size of the block in Bytes. |
**extraData** | **string** | Numeric representation of the block extra data |
**gasLimit** | **int** | Defines the total gas limit of all transactions in the block. |
**gasUsed** | **int** | Represents the total amount of gas used by all transactions in this block. |
**hash** | **string** | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**height** | **int** | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
**minedInSeconds** | **int** | Numeric representation of the block gas limit |
**nonce** | **int** | Represents a random value that can be adjusted to satisfy the proof of work |
**previousBlockHash** | **string** | Represents the hash of the previous block, also known as the parent block. |
**timestamp** | **int** | Defines the exact date/time when this block was mined in Unix Timestamp. |
**totalDifficulty** | **int** | Defines the total difficulty of the chain until this block, i.e. how difficult it is for a specific miner to mine a new block. |
**transactionsCount** | **int** | Represents the total number of all transactions as part of this block. |
**blockchainSpecific** | [**\MitinSany/CryptoapisApiClient\Model\GetLastMinedBlockEVMRIBST**](GetLastMinedBlockEVMRIBST.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
