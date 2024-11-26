# Terapi\Client\ApplicationApiKeyApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationApikeyGeneratePost**](ApplicationApiKeyApi.md#applicationapikeygeneratepost) | **POST** /application-apikey/generate | 16_999
[**applicationApikeyGetByApplicationIdGet**](ApplicationApiKeyApi.md#applicationapikeygetbyapplicationidget) | **GET** /application-apikey/get-by-application-id | 16_995
[**applicationApikeyRevokeDelete**](ApplicationApiKeyApi.md#applicationapikeyrevokedelete) | **DELETE** /application-apikey/revoke | 16_998

# **applicationApikeyGeneratePost**
> \Terapi\Client\Model\CreateApplicationApiKeyResponse applicationApikeyGeneratePost($body)

16_999

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 16_999_101 | ApplicationNotFound | Application not found. | | 16_999_102 | UnknownExceptionWhenCheckApplicationExistence | Unknown exception when checking if application exists. | | 16_999_103 | UnknownExceptionWhenGenerateApplicationApiKey | Unknown exception when generating application API key. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Terapi\Client\Model\ApplicationapikeyGenerateBody(); // \Terapi\Client\Model\ApplicationapikeyGenerateBody | 

try {
    $result = $apiInstance->applicationApikeyGeneratePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApiKeyApi->applicationApikeyGeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Terapi\Client\Model\ApplicationapikeyGenerateBody**](../Model/ApplicationapikeyGenerateBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\CreateApplicationApiKeyResponse**](../Model/CreateApplicationApiKeyResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationApikeyGetByApplicationIdGet**
> \Terapi\Client\Model\ApplicationApiKeyByApplicationIdResponse applicationApikeyGetByApplicationIdGet($application_id)

16_995

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 16_995_101 | ApplicationApiKeyNotFound | Application API key not found. | | 16_995_102 | UnknownExceptionWhenTryingFetchApplications | Unknown exception when trying to fetch applications. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->applicationApikeyGetByApplicationIdGet($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApiKeyApi->applicationApikeyGetByApplicationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\ApplicationApiKeyByApplicationIdResponse**](../Model/ApplicationApiKeyByApplicationIdResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationApikeyRevokeDelete**
> \Terapi\Client\Model\RevokeApplicationApiKeyResponse applicationApikeyRevokeDelete($id)

16_998

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 16_998_101 | ApplicationApiKeyNotFound | Application API key not found. | | 16_998_102 | UnknownExceptionWhenCheckApplicationExistence | Unknown exception when checking if application exists. | | 16_998_103 | UnknownExceptionWhenGenerateApplicationApiKey | Unknown exception when generating application API key. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->applicationApikeyRevokeDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApiKeyApi->applicationApikeyRevokeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\RevokeApplicationApiKeyResponse**](../Model/RevokeApplicationApiKeyResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

