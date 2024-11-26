# Terapi\Client\IntegrationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationGetGet**](IntegrationApi.md#integrationgetget) | **GET** /integration/get | 17_997
[**integrationListGet**](IntegrationApi.md#integrationlistget) | **GET** /integration/list | 17_999

# **integrationGetGet**
> \Terapi\Client\Model\GetOneIntegrationResponse integrationGetGet($id)

17_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 17_997_101 | UnknownExceptionWhenTryingFetchOneIntegration |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->integrationGetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->integrationGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\GetOneIntegrationResponse**](../Model/GetOneIntegrationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationListGet**
> \Terapi\Client\Model\IntegrationListResponse integrationListGet($page, $per_page, $search_keyword, $category_id)

17_999

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 17_999_101 | UnknownExceptionWhenTryingFetchIntegrations | Unknown exception when trying to fetch integrations. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 
$search_keyword = "search_keyword_example"; // string | 
$category_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->integrationListGet($page, $per_page, $search_keyword, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->integrationListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **search_keyword** | **string**|  | [optional]
 **category_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\IntegrationListResponse**](../Model/IntegrationListResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

