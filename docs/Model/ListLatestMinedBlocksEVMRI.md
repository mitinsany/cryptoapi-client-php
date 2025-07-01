# # ListLatestMinedBlocksEVMRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size** | **int** | Numeric representation of the block size |
**extraData** | **string** | Represents any data that can be included by the miner in the block. |
**gasLimit** | **int** | Defines the total gas limit of all transactions in the block. |
**gasUsed** | **int** | Represents the total amount of gas used by all transactions in this block. |
**hash** | **string** | Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions. |
**height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**minedInSeconds** | **int** | Specifies the amount of time required for the block to be mined in second |
**nonce** | **int** | Represents a random value that can be adjusted to satisfy the proof of work |
**previousBlockHash** | **string** | Represents the hash of the previous block, also known as the parent block. |
**timestamp** | **int** | Defines the exact date/time when this block was mined in Unix Timestamp. |
**totalDifficulty** | **int** | Defines the total difficulty of the chain until this block, i.e. how difficult it is for a specific miner to mine a new block |
**transactionsCount** | **int** | Represents the total number of all transactions as part of this block. |
**blockchainSpecific** | [**\MitinSany/CryptoapisApiClient\Model\ListLatestMinedBlocksEVMRIBST**](ListLatestMinedBlocksEVMRIBST.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
