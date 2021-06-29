# # PaymentUrlDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentUrl** | **string** | URL for embedded payment link. | [optional] 
**merchantTransactionId** | **string** | The unique merchant transaction ID from the request, if supplied. | [optional] 
**orderId** | **string** | Note - Client Order ID if supplied by client. If not supplied by client, IPG will generate. The first 12 alphanumeric digits are passed down to Fiserv Enterprise reporting tool, Clientline and Data File Manager (DFM). | [optional] 
**requestTime** | **int** | The transaction time in seconds since epoch. | [optional] 
**status** | [**\FirstData\FirstApi\Client\Model\PaymentUrlStatus**](PaymentUrlStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


