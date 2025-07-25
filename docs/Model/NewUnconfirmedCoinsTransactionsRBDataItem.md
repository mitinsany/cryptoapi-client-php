# # NewUnconfirmedCoinsTransactionsRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Represents the address of the transaction, per which the result is returned. |
**allowDuplicates** | **bool** | Specifies a flag that permits or denies the creation of duplicate addresses. | [optional] [default to false]
**callbackSecretKey** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs 2.0. For more information please see our [Documentation](https://project-2a14af.doxify.ai/v-1.2021-03-20-111/RESTapis/general-information/callbacks#callback-security). | [optional]
**callbackUrl** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. &#x60;We support ONLY httpS type of protocol&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
