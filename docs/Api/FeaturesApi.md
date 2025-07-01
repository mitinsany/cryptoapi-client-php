# MitinSany/CryptoapisApiClient\FeaturesApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses()**](FeaturesApi.md#deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses) | **GET** /utils/{blockchain}/{network}/xpubs/{extendedPublicKey}/derive-addresses | Derive HD Wallet (xPub, yPub, zPub) Change Or Receiving Addresses |


## `deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses()`

```php
deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $addressesCount, $isChange, $startIndex): \MitinSany/CryptoapisApiClient\Model\DeriveHDWalletXPubYPubZPubChangeOrReceivingAddressesR
```

Derive HD Wallet (xPub, yPub, zPub) Change Or Receiving Addresses

Through this endpoint, customers can derive up to 10 addresses - both change and receive, from a certain HD Wallet (xPub, yPub, zPub), by providing an extended public key. By default the system creates a receiving/deposit address, unless the isChange attribute is set to 'true'. In that case the system derives a 'change' address. The change address can be derived only for UTXO based blockchains, for all the rest, this endpoint always creates a deposit/receiving address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MitinSany/CryptoapisApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MitinSany/CryptoapisApiClient\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extendedPublicKey = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"sepolia\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$addressFormat = p2sh; // string | Represents the format of the address.
$addressesCount = 2; // int | Represents the addresses count.
$isChange = true; // bool | Defines if the specific address is a change or deposit address. If the value is True - it is a change address, if it is False - it is a Deposit address.
$startIndex = 3; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses($blockchain, $extendedPublicKey, $network, $context, $addressFormat, $addressesCount, $isChange, $startIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **extendedPublicKey** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;sepolia\&quot; are test networks. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **addressFormat** | **string**| Represents the format of the address. | [optional] |
| **addressesCount** | **int**| Represents the addresses count. | [optional] |
| **isChange** | **bool**| Defines if the specific address is a change or deposit address. If the value is True - it is a change address, if it is False - it is a Deposit address. | [optional] |
| **startIndex** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] |

### Return type

[**\MitinSany/CryptoapisApiClient\Model\DeriveHDWalletXPubYPubZPubChangeOrReceivingAddressesR**](../Model/DeriveHDWalletXPubYPubZPubChangeOrReceivingAddressesR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
