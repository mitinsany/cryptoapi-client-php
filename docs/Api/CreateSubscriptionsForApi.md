# CryptoapisApiClient\CreateSubscriptionsForApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**minedTransaction()**](CreateSubscriptionsForApi.md#minedTransaction) | **POST** /blockchain-events/{blockchain}/{network}/transaction-mined | Mined Transaction |
| [**newBlock()**](CreateSubscriptionsForApi.md#newBlock) | **POST** /blockchain-events/{blockchain}/{network}/block-mined | New Block |
| [**newConfirmedCoinsTransactions()**](CreateSubscriptionsForApi.md#newConfirmedCoinsTransactions) | **POST** /blockchain-events/{blockchain}/{network}/address-coins-transactions-confirmed | New Confirmed Coins Transactions |
| [**newConfirmedCoinsTransactionsAndEachConfirmation()**](CreateSubscriptionsForApi.md#newConfirmedCoinsTransactionsAndEachConfirmation) | **POST** /blockchain-events/{blockchain}/{network}/address-coins-transactions-confirmed-each-confirmation | New Confirmed Coins Transactions And Each Confirmation |
| [**newConfirmedInternalTransactions()**](CreateSubscriptionsForApi.md#newConfirmedInternalTransactions) | **POST** /blockchain-events/{blockchain}/{network}/address-internal-transactions-confirmed | New Confirmed Internal Transactions |
| [**newConfirmedInternalTransactionsAndEachConfirmation()**](CreateSubscriptionsForApi.md#newConfirmedInternalTransactionsAndEachConfirmation) | **POST** /blockchain-events/{blockchain}/{network}/address-internal-transactions-confirmed-each-confirmation | New Confirmed Internal Transactions And Each Confirmation |
| [**newConfirmedTokensTransactions()**](CreateSubscriptionsForApi.md#newConfirmedTokensTransactions) | **POST** /blockchain-events/{blockchain}/{network}/address-tokens-transactions-confirmed | New Confirmed Tokens Transactions |
| [**newConfirmedTokensTransactionsAndEachConfirmation()**](CreateSubscriptionsForApi.md#newConfirmedTokensTransactionsAndEachConfirmation) | **POST** /blockchain-events/{blockchain}/{network}/address-tokens-transactions-confirmed-each-confirmation | New Confirmed Tokens Transactions And Each Confirmation |
| [**newUnconfirmedCoinsTransactions()**](CreateSubscriptionsForApi.md#newUnconfirmedCoinsTransactions) | **POST** /blockchain-events/{blockchain}/{network}/address-coins-transactions-unconfirmed | New Unconfirmed Coins Transactions |


## `minedTransaction()`

```php
minedTransaction($blockchain, $network, $context, $minedTransactionRB): \CryptoapisApiClient\Model\MinedTransactionR
```

Mined Transaction

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when a specific transaction is mined. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs. The information is returned per specified `transactionId`.    A transaction is mined when it is included in a new block in the blockchain.    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2021-03-20-111/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$minedTransactionRB = new \CryptoapisApiClient\Model\MinedTransactionRB(); // \CryptoapisApiClient\Model\MinedTransactionRB

try {
    $result = $apiInstance->minedTransaction($blockchain, $network, $context, $minedTransactionRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->minedTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **minedTransactionRB** | [**\CryptoapisApiClient\Model\MinedTransactionRB**](../Model/MinedTransactionRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\MinedTransactionR**](../Model/MinedTransactionR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newBlock()`

```php
newBlock($blockchain, $network, $context, $newBlockRB): \CryptoapisApiClient\Model\NewBlockR
```

New Block

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when a new block is mined in the specific blockchain. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs. The information is returned per specified address.    A new block is mined when it is added to the chain once a consensus is reached by the majority of the miners, which is when the block gets validated and added to the blockchain.    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newBlockRB = new \CryptoapisApiClient\Model\NewBlockRB(); // \CryptoapisApiClient\Model\NewBlockRB

try {
    $result = $apiInstance->newBlock($blockchain, $network, $context, $newBlockRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newBlockRB** | [**\CryptoapisApiClient\Model\NewBlockRB**](../Model/NewBlockRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewBlockR**](../Model/NewBlockR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newConfirmedCoinsTransactions()`

```php
newConfirmedCoinsTransactions($blockchain, $network, $context, $newConfirmedCoinsTransactionsRB): \CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsR
```

New Confirmed Coins Transactions

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when there are new incoming or outgoing confirmed transactions for coins from/to the customer's address. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs. The information is returned per specified address.     Being confirmed means that the transactions are verified by miners and added to the next block.    {note}For UTXO-based protocols like Bitcoin, a transaction could have multiple inputs and outputs, which means the address could be both sender and recipient. [Here](https://project-2a14af.doxify.ai/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-data-returned-for-utxo-based-transactions) is how we inform you on that.{/note}    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newConfirmedCoinsTransactionsRB = new \CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsRB(); // \CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsRB

try {
    $result = $apiInstance->newConfirmedCoinsTransactions($blockchain, $network, $context, $newConfirmedCoinsTransactionsRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newConfirmedCoinsTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newConfirmedCoinsTransactionsRB** | [**\CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsRB**](../Model/NewConfirmedCoinsTransactionsRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsR**](../Model/NewConfirmedCoinsTransactionsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newConfirmedCoinsTransactionsAndEachConfirmation()`

```php
newConfirmedCoinsTransactionsAndEachConfirmation($blockchain, $network, $context, $newConfirmedCoinsTransactionsAndEachConfirmationRB): \CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsAndEachConfirmationR
```

New Confirmed Coins Transactions And Each Confirmation

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when there are new incoming or outgoing confirmed transactions for coins from/to the customer's address with also a response at each confirmation the transaction has received until the specified confirmations limit is reached. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs. The information is returned per specified address.     Being confirmed means that the transactions are verified by miners and added to the next block. This endpoint refers to **coins transactions only, not tokens**.    {note}For UTXO-based protocols like Bitcoin, a transaction could have multiple inputs and outputs, which means the address could be both sender and recipient. [Here](https://project-2a14af.doxify.ai/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-data-returned-for-utxo-based-transactions) is how we inform you on that.{/note}    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newConfirmedCoinsTransactionsAndEachConfirmationRB = new \CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsAndEachConfirmationRB(); // \CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsAndEachConfirmationRB

try {
    $result = $apiInstance->newConfirmedCoinsTransactionsAndEachConfirmation($blockchain, $network, $context, $newConfirmedCoinsTransactionsAndEachConfirmationRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newConfirmedCoinsTransactionsAndEachConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newConfirmedCoinsTransactionsAndEachConfirmationRB** | [**\CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsAndEachConfirmationRB**](../Model/NewConfirmedCoinsTransactionsAndEachConfirmationRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewConfirmedCoinsTransactionsAndEachConfirmationR**](../Model/NewConfirmedCoinsTransactionsAndEachConfirmationR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newConfirmedInternalTransactions()`

```php
newConfirmedInternalTransactions($blockchain, $network, $context, $newConfirmedInternalTransactionsRB): \CryptoapisApiClient\Model\NewConfirmedInternalTransactionsR
```

New Confirmed Internal Transactions

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when there are new confirmed internal transactions. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs.    Being confirmed means that the transactions are verified by miners and added to the next block.    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2021-03-20-111/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum-classic; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = mordor; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newConfirmedInternalTransactionsRB = new \CryptoapisApiClient\Model\NewConfirmedInternalTransactionsRB(); // \CryptoapisApiClient\Model\NewConfirmedInternalTransactionsRB

try {
    $result = $apiInstance->newConfirmedInternalTransactions($blockchain, $network, $context, $newConfirmedInternalTransactionsRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newConfirmedInternalTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newConfirmedInternalTransactionsRB** | [**\CryptoapisApiClient\Model\NewConfirmedInternalTransactionsRB**](../Model/NewConfirmedInternalTransactionsRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewConfirmedInternalTransactionsR**](../Model/NewConfirmedInternalTransactionsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newConfirmedInternalTransactionsAndEachConfirmation()`

```php
newConfirmedInternalTransactionsAndEachConfirmation($blockchain, $network, $context, $newConfirmedInternalTransactionsAndEachConfirmationRB): \CryptoapisApiClient\Model\NewConfirmedInternalTransactionsAndEachConfirmationR
```

New Confirmed Internal Transactions And Each Confirmation

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when there are new confirmed internal transactions. Includes also a response at each confirmation the transaction receives until the specified confirmations limit is reached. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs.     Being confirmed means that the transactions are verified by miners and added to the next block.    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2021-03-20-111/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum-classic; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = mordor; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newConfirmedInternalTransactionsAndEachConfirmationRB = new \CryptoapisApiClient\Model\NewConfirmedInternalTransactionsAndEachConfirmationRB(); // \CryptoapisApiClient\Model\NewConfirmedInternalTransactionsAndEachConfirmationRB

try {
    $result = $apiInstance->newConfirmedInternalTransactionsAndEachConfirmation($blockchain, $network, $context, $newConfirmedInternalTransactionsAndEachConfirmationRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newConfirmedInternalTransactionsAndEachConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newConfirmedInternalTransactionsAndEachConfirmationRB** | [**\CryptoapisApiClient\Model\NewConfirmedInternalTransactionsAndEachConfirmationRB**](../Model/NewConfirmedInternalTransactionsAndEachConfirmationRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewConfirmedInternalTransactionsAndEachConfirmationR**](../Model/NewConfirmedInternalTransactionsAndEachConfirmationR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newConfirmedTokensTransactions()`

```php
newConfirmedTokensTransactions($blockchain, $network, $context, $newConfirmedTokensTransactionsRB): \CryptoapisApiClient\Model\NewConfirmedTokensTransactionsR
```

New Confirmed Tokens Transactions

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when there are new incoming or outgoing confirmed transactions for tokens from/to the customer's address. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs. The information is returned per specified address.     Being confirmed means that the transactions are verified by miners and added to the next block. This endpoint refers to **tokens transactions only, not coins**.    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newConfirmedTokensTransactionsRB = new \CryptoapisApiClient\Model\NewConfirmedTokensTransactionsRB(); // \CryptoapisApiClient\Model\NewConfirmedTokensTransactionsRB

try {
    $result = $apiInstance->newConfirmedTokensTransactions($blockchain, $network, $context, $newConfirmedTokensTransactionsRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newConfirmedTokensTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newConfirmedTokensTransactionsRB** | [**\CryptoapisApiClient\Model\NewConfirmedTokensTransactionsRB**](../Model/NewConfirmedTokensTransactionsRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewConfirmedTokensTransactionsR**](../Model/NewConfirmedTokensTransactionsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newConfirmedTokensTransactionsAndEachConfirmation()`

```php
newConfirmedTokensTransactionsAndEachConfirmation($blockchain, $network, $context, $newConfirmedTokensTransactionsAndEachConfirmationRB): \CryptoapisApiClient\Model\NewConfirmedTokensTransactionsAndEachConfirmationR
```

New Confirmed Tokens Transactions And Each Confirmation

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when there are new incoming or outgoing confirmed transactions for tokens from/to the customer's address with also a response at each confirmation the transaction has received until the specified confirmations limit is reached. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs. The information is returned per specified address.     Being confirmed means that the transactions are verified by miners and added to the next block. This endpoint refers to **tokens transactions only, not coins**.    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = sepolia; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newConfirmedTokensTransactionsAndEachConfirmationRB = new \CryptoapisApiClient\Model\NewConfirmedTokensTransactionsAndEachConfirmationRB(); // \CryptoapisApiClient\Model\NewConfirmedTokensTransactionsAndEachConfirmationRB

try {
    $result = $apiInstance->newConfirmedTokensTransactionsAndEachConfirmation($blockchain, $network, $context, $newConfirmedTokensTransactionsAndEachConfirmationRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newConfirmedTokensTransactionsAndEachConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newConfirmedTokensTransactionsAndEachConfirmationRB** | [**\CryptoapisApiClient\Model\NewConfirmedTokensTransactionsAndEachConfirmationRB**](../Model/NewConfirmedTokensTransactionsAndEachConfirmationRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewConfirmedTokensTransactionsAndEachConfirmationR**](../Model/NewConfirmedTokensTransactionsAndEachConfirmationR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newUnconfirmedCoinsTransactions()`

```php
newUnconfirmedCoinsTransactions($blockchain, $network, $context, $newUnconfirmedCoinsTransactionsRB): \CryptoapisApiClient\Model\NewUnconfirmedCoinsTransactionsR
```

New Unconfirmed Coins Transactions

Through this endpoint customers can create callback subscriptions for a specific event. In this case the event is when there are new unconfirmed coins transactions for the user. By creating this subscription the user will be notified by Crypto APIs 2.0 when that event occurs. The information is returned per specified address.    Unconfirmed coins transactions remain in the mempool (memory pool) until they are confirmed by miners and added to the next block. Sometimes spikes in transaction activity can cause delays in confirmations.    {note}For UTXO-based protocols like Bitcoin, a transaction could have multiple inputs and outputs, which means the address could be both sender and recipient.. [Here](https://project-2a14af.doxify.ai/v-1.2021-03-20-111/RESTapis/general-information/callbacks#callback-data-returned-for-utxo-based-transactions) is how we inform you on that.{/note}    {warning}We cannot guarantee at 100% that webhooks for unconfirmed transactions will always be received. Some may **not get received** due to the possibility of some nodes not being updated with that information. This can occur in networks with low activity and/or not many nodes, e.g. Testnet networks and rarely Mainnets.{/warning}    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://project-2a14af.doxify.ai/v-1.2021-03-20-111/RESTapis/general-information/callbacks#callback-url).{/note}    {note}It is also **important to note** that just because pending unconfirmed transactions are in the mempool, **doesn't necessarily** mean they will get confirmed.{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoapisApiClient\Api\CreateSubscriptionsForApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$newUnconfirmedCoinsTransactionsRB = new \CryptoapisApiClient\Model\NewUnconfirmedCoinsTransactionsRB(); // \CryptoapisApiClient\Model\NewUnconfirmedCoinsTransactionsRB

try {
    $result = $apiInstance->newUnconfirmedCoinsTransactions($blockchain, $network, $context, $newUnconfirmedCoinsTransactionsRB);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateSubscriptionsForApi->newUnconfirmedCoinsTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **newUnconfirmedCoinsTransactionsRB** | [**\CryptoapisApiClient\Model\NewUnconfirmedCoinsTransactionsRB**](../Model/NewUnconfirmedCoinsTransactionsRB.md)|  | [optional] |

### Return type

[**\CryptoapisApiClient\Model\NewUnconfirmedCoinsTransactionsR**](../Model/NewUnconfirmedCoinsTransactionsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
