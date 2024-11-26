# Terapi\Client\ApplicationIntegrationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationIntegrationAddIntegrationToApplicationPost**](ApplicationIntegrationApi.md#applicationintegrationaddintegrationtoapplicationpost) | **POST** /application-integration/add-integration-to-application | 18_999
[**applicationIntegrationApplicationIntegrationListByApplicationIdGet**](ApplicationIntegrationApi.md#applicationintegrationapplicationintegrationlistbyapplicationidget) | **GET** /application-integration/application-integration-list-by-application-id | 18_997

# **applicationIntegrationAddIntegrationToApplicationPost**
> \Terapi\Client\Model\AddIntegrationToApplicationResponse applicationIntegrationAddIntegrationToApplicationPost($body)

18_999

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 18_999_101 | ApplicationNotFound | Application not found. | | 18_999_102 | UnknownExceptionWhenCheckApplicationExistence | Unknown exception when checking if application exists. | | 18_999_103 | IntegrationNotFound | Integration not found. | | 18_999_104 | UnknownExceptionWhenCheckIntegrationExistence | Unknown exception when checking if integration exists. | | 18_999_105 | UnknownExceptionWhenAddIntegrationToApplication | Unknown exception when adding integration to application. | | 18_999_106 | IntegrationAlreadyAddedToTheApplication | You already map this integration to your application. | | 18_999_107 | UnknownExceptionWhenCheckApplicationIntegrationUniqueness |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody(); // \Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody | 

try {
    $result = $apiInstance->applicationIntegrationAddIntegrationToApplicationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationIntegrationApi->applicationIntegrationAddIntegrationToApplicationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody**](../Model/ApplicationintegrationAddintegrationtoapplicationBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\AddIntegrationToApplicationResponse**](../Model/AddIntegrationToApplicationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationIntegrationApplicationIntegrationListByApplicationIdGet**
> \Terapi\Client\Model\ApplicationIntegrationListByApplicationIdResponse applicationIntegrationApplicationIntegrationListByApplicationIdGet($application_id, $page, $per_page)

18_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 18_998 | UnknownExceptionWhenTryingFetchApplicationIntegrations |  | | 18_999 | ApplicationNotFound |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationIntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $apiInstance->applicationIntegrationApplicationIntegrationListByApplicationIdGet($application_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationIntegrationApi->applicationIntegrationApplicationIntegrationListByApplicationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | [**string**](../Model/.md)|  | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Terapi\Client\Model\ApplicationIntegrationListByApplicationIdResponse**](../Model/ApplicationIntegrationListByApplicationIdResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

