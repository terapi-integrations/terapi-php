# Terapi\Client\ApiProxyApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProxyEndpointDelete**](ApiProxyApi.md#apiproxyendpointdelete) | **DELETE** /api-proxy/{endpoint} | 21_997
[**apiProxyEndpointGet**](ApiProxyApi.md#apiproxyendpointget) | **GET** /api-proxy/{endpoint} | 21_997
[**apiProxyEndpointPatch**](ApiProxyApi.md#apiproxyendpointpatch) | **PATCH** /api-proxy/{endpoint} | 21_997
[**apiProxyEndpointPost**](ApiProxyApi.md#apiproxyendpointpost) | **POST** /api-proxy/{endpoint} | 21_997
[**apiProxyEndpointPut**](ApiProxyApi.md#apiproxyendpointput) | **PUT** /api-proxy/{endpoint} | 21_997
[**apiProxyOauth2ChallengeGet**](ApiProxyApi.md#apiproxyoauth2challengeget) | **GET** /api-proxy/oauth2/challenge | 21_999
[**apiProxyUnifiedContactsExternalIdGet**](ApiProxyApi.md#apiproxyunifiedcontactsexternalidget) | **GET** /api-proxy/unified/contacts/{externalId} | 
[**apiProxyUnifiedContactsGet**](ApiProxyApi.md#apiproxyunifiedcontactsget) | **GET** /api-proxy/unified/contacts | 

# **apiProxyEndpointDelete**
> \Terapi\Client\Model\CallActionResponse apiProxyEndpointDelete($endpoint, $body)

21_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 21_997_101 | TenantNotFound |  | | 21_997_102 | IntegrationNotFound |  | | 21_997_103 | UnknownExceptionWhenCallingThirdPartyApi |  | | 21_997_104 | UnknownExceptionWhenCallAction |  | | 21_997_105 | IntegrationIsNotEnabled |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint = "endpoint_example"; // string | 
$body = new \Terapi\Client\Model\ApiproxyEndpointBody6(); // \Terapi\Client\Model\ApiproxyEndpointBody6 | 

try {
    $result = $apiInstance->apiProxyEndpointDelete($endpoint, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyEndpointDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint** | **string**|  |
 **body** | [**\Terapi\Client\Model\ApiproxyEndpointBody6**](../Model/ApiproxyEndpointBody6.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\CallActionResponse**](../Model/CallActionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProxyEndpointGet**
> \Terapi\Client\Model\CallActionResponse apiProxyEndpointGet($integration_name, $endpoint, $x_tenant_id)

21_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 21_997_101 | TenantNotFound |  | | 21_997_102 | IntegrationNotFound |  | | 21_997_103 | UnknownExceptionWhenCallingThirdPartyApi |  | | 21_997_104 | UnknownExceptionWhenCallAction |  | | 21_997_105 | IntegrationIsNotEnabled |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_name = "integration_name_example"; // string | 
$endpoint = "endpoint_example"; // string | 
$x_tenant_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiProxyEndpointGet($integration_name, $endpoint, $x_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyEndpointGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_name** | **string**|  |
 **endpoint** | **string**|  |
 **x_tenant_id** | [**string**](../Model/.md)|  |

### Return type

[**\Terapi\Client\Model\CallActionResponse**](../Model/CallActionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProxyEndpointPatch**
> \Terapi\Client\Model\CallActionResponse apiProxyEndpointPatch($endpoint, $body)

21_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 21_997_101 | TenantNotFound |  | | 21_997_102 | IntegrationNotFound |  | | 21_997_103 | UnknownExceptionWhenCallingThirdPartyApi |  | | 21_997_104 | UnknownExceptionWhenCallAction |  | | 21_997_105 | IntegrationIsNotEnabled |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint = "endpoint_example"; // string | 
$body = new \Terapi\Client\Model\ApiproxyEndpointBody9(); // \Terapi\Client\Model\ApiproxyEndpointBody9 | 

try {
    $result = $apiInstance->apiProxyEndpointPatch($endpoint, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyEndpointPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint** | **string**|  |
 **body** | [**\Terapi\Client\Model\ApiproxyEndpointBody9**](../Model/ApiproxyEndpointBody9.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\CallActionResponse**](../Model/CallActionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProxyEndpointPost**
> \Terapi\Client\Model\CallActionResponse apiProxyEndpointPost($endpoint, $body)

21_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 21_997_101 | TenantNotFound |  | | 21_997_102 | IntegrationNotFound |  | | 21_997_103 | UnknownExceptionWhenCallingThirdPartyApi |  | | 21_997_104 | UnknownExceptionWhenCallAction |  | | 21_997_105 | IntegrationIsNotEnabled |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint = "endpoint_example"; // string | 
$body = new \Terapi\Client\Model\ApiproxyEndpointBody3(); // \Terapi\Client\Model\ApiproxyEndpointBody3 | 

try {
    $result = $apiInstance->apiProxyEndpointPost($endpoint, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyEndpointPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint** | **string**|  |
 **body** | [**\Terapi\Client\Model\ApiproxyEndpointBody3**](../Model/ApiproxyEndpointBody3.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\CallActionResponse**](../Model/CallActionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProxyEndpointPut**
> \Terapi\Client\Model\CallActionResponse apiProxyEndpointPut($endpoint, $body)

21_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 21_997_101 | TenantNotFound |  | | 21_997_102 | IntegrationNotFound |  | | 21_997_103 | UnknownExceptionWhenCallingThirdPartyApi |  | | 21_997_104 | UnknownExceptionWhenCallAction |  | | 21_997_105 | IntegrationIsNotEnabled |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint = "endpoint_example"; // string | 
$body = new \Terapi\Client\Model\ApiproxyEndpointBody(); // \Terapi\Client\Model\ApiproxyEndpointBody | 

try {
    $result = $apiInstance->apiProxyEndpointPut($endpoint, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyEndpointPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint** | **string**|  |
 **body** | [**\Terapi\Client\Model\ApiproxyEndpointBody**](../Model/ApiproxyEndpointBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\CallActionResponse**](../Model/CallActionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProxyOauth2ChallengeGet**
> \Terapi\Client\Model\OAuth2ChallengeResponse apiProxyOauth2ChallengeGet($tenant_id, $external_id)

21_999

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 21_999_101 | TenantNotFound |  | | 21_999_102 | IntegrationNotFound |  | | 21_999_103 | UnknownExceptionWhenOAuth2Challenge |  | | 21_999_104 | IntegrationIsNotEnabled |  | | 21_999_105 | UnknownExceptionWhenCheckIfIntegrationIsEnabled |  | | 21_999_106 | UnknownExceptionWhenFetchTenant |  | | 21_999_107 | UnknownExceptionWhenTryToGetTenantTokens |  | | 21_999_108 | UnknownExceptionWhenReturnResponse |  | | 21_999_109 | UnknownExceptionWhenAddingTenantInKeycloak |  | | 21_999_110 | UnknownExceptionWhenAddingTenantInOrganization |  | | 21_999_111 | UnknownExceptionWhenTryToCreateTenantUser |  | | 21_999_112 | UnknownExceptionWhenTryToCheckIfTenantUserExists |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$external_id = "external_id_example"; // string | 

try {
    $result = $apiInstance->apiProxyOauth2ChallengeGet($tenant_id, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyOauth2ChallengeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | [**string**](../Model/.md)|  | [optional]
 **external_id** | **string**|  | [optional]

### Return type

[**\Terapi\Client\Model\OAuth2ChallengeResponse**](../Model/OAuth2ChallengeResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProxyUnifiedContactsExternalIdGet**
> \Terapi\Client\Model\UnifiedContactResponse apiProxyUnifiedContactsExternalIdGet($external_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = "external_id_example"; // string | 

try {
    $result = $apiInstance->apiProxyUnifiedContactsExternalIdGet($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyUnifiedContactsExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**|  |

### Return type

[**\Terapi\Client\Model\UnifiedContactResponse**](../Model/UnifiedContactResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProxyUnifiedContactsGet**
> \Terapi\Client\Model\UnifiedContactsListResponse apiProxyUnifiedContactsGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\ApiProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiProxyUnifiedContactsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiProxyApi->apiProxyUnifiedContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Terapi\Client\Model\UnifiedContactsListResponse**](../Model/UnifiedContactsListResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

