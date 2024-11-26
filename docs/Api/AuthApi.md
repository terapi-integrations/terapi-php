# Terapi\Client\AuthApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authAuthenticatePost**](AuthApi.md#authauthenticatepost) | **POST** /auth/authenticate | 23_999
[**authRefreshPost**](AuthApi.md#authrefreshpost) | **POST** /auth/refresh | 23_998

# **authAuthenticatePost**
> \Terapi\Client\Model\GetAuthenticationTokenResponse authAuthenticatePost($secret_key)

23_999

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 23_999_101 | UnknownExceptionWhenTryingFetchApplicationApiKey |  | | 23_999_102 | FailedToFindApplicationApiKey |  | | 23_999_103 | UnknownExceptionWhenTryingToGetUserAuthenticationToken |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secret_key = "secret_key_example"; // string | 

try {
    $result = $apiInstance->authAuthenticatePost($secret_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authAuthenticatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secret_key** | **string**|  | [optional]

### Return type

[**\Terapi\Client\Model\GetAuthenticationTokenResponse**](../Model/GetAuthenticationTokenResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authRefreshPost**
> \Terapi\Client\Model\RefreshAuthenticationTokenResponse authRefreshPost($refresh_token)

23_998

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 23_998_101 | UnknownExceptionWhenTryingToRefreshUserAuthenticationToken |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_token = "refresh_token_example"; // string | 

try {
    $result = $apiInstance->authRefreshPost($refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authRefreshPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token** | **string**|  | [optional]

### Return type

[**\Terapi\Client\Model\RefreshAuthenticationTokenResponse**](../Model/RefreshAuthenticationTokenResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

