# # DeleteBlockchainEventSubscriptionRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callbackSecretKey** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/v-1.2023-04-25-105/RESTapis/general-information/callbacks#callback-security). |
**callbackUrl** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. &#x60;We support ONLY httpS type of protocol&#x60;. |
**createdTimestamp** | **int** | Defines the specific time/date when the subscription was created in Unix Timestamp. |
**eventType** | **string** | Defines the type of the specific event available for the customer to subscribe to for callback notification. |
**referenceId** | **string** | Represents a unique ID used to reference the specific callback subscription. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
