# Terapi\Client\ApplicationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationCreatePost**](ApplicationApi.md#applicationcreatepost) | **POST** /application/create | 15_999
[**applicationDeleteDelete**](ApplicationApi.md#applicationdeletedelete) | **DELETE** /application/delete | 15_997
[**applicationListGet**](ApplicationApi.md#applicationlistget) | **GET** /application/list | 15_996
[**applicationUpdatePut**](ApplicationApi.md#applicationupdateput) | **PUT** /application/update | 15_998

# **applicationCreatePost**
> \Terapi\Client\Model\CreateApplicationResponse applicationCreatePost($body)

15_999

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 15_999_101 | ApplicationNameAlreadyExist | Application name already exists. | | 15_999_102 | UnknownExceptionWhenValidateApplicationNameUniqueness | Unknown exception when validating application name uniqueness. | | 15_999_103 | UnknownExceptionWhenInsertApplication | Unknown exception when inserting application. | | 15_999_104 | UserNotFound | User not found. | | 15_999_105 | UnknownExceptionWhenCreateOrganization |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Terapi\Client\Model\ApplicationCreateBody(); // \Terapi\Client\Model\ApplicationCreateBody | 

try {
    $result = $apiInstance->applicationCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Terapi\Client\Model\ApplicationCreateBody**](../Model/ApplicationCreateBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\CreateApplicationResponse**](../Model/CreateApplicationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationDeleteDelete**
> \Terapi\Client\Model\DeleteApplicationResponse applicationDeleteDelete($id)

15_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 15_997_101 | ApplicationNotFound | Application not found. | | 15_997_102 | UnknownExceptionWhenFetchApplicationExistence | Unknown exception when fetching application existence. | | 15_997_103 | UnknownExceptionWhenDeleteApplication | Unknown exception when deleting application. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->applicationDeleteDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\DeleteApplicationResponse**](../Model/DeleteApplicationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationListGet**
> \Terapi\Client\Model\UserApplicationListResponse applicationListGet($page, $per_page)

15_996

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 15_996_101 | UnknownExceptionWhenTryingFetchApplications | Unknown exception when trying to fetch applications. | | 15_996_102 | UserNotFound | User not found. | | 15_996_103 | UnknownExceptionWhenInsertApplication | Unknown exception when inserting application. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $apiInstance->applicationListGet($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Terapi\Client\Model\UserApplicationListResponse**](../Model/UserApplicationListResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationUpdatePut**
> \Terapi\Client\Model\UpdateApplicationResponse applicationUpdatePut($body)

15_998

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 15_998_101 | ApplicationNotFound | Application not found. | | 15_998_102 | UnknownExceptionWhenFetchApplication | Unknown exception when fetching application. | | 15_998_103 | UnknownExceptionWhenInsertApplication | Unknown exception when inserting application. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Terapi\Client\Model\ApplicationUpdateBody(); // \Terapi\Client\Model\ApplicationUpdateBody | 

try {
    $result = $apiInstance->applicationUpdatePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationUpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Terapi\Client\Model\ApplicationUpdateBody**](../Model/ApplicationUpdateBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\UpdateApplicationResponse**](../Model/UpdateApplicationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

