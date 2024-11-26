# Terapi\Client\TenantApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tenantDeclineTenantIdGet**](TenantApi.md#tenantdeclinetenantidget) | **GET** /tenant/decline-tenant/{id} | 20_996
[**tenantInviteTenantByApplicationIntegrationIdPost**](TenantApi.md#tenantinvitetenantbyapplicationintegrationidpost) | **POST** /tenant/invite-tenant-by-application-integration-id | 20_998
[**tenantInviteTenantPost**](TenantApi.md#tenantinvitetenantpost) | **POST** /tenant/invite-tenant | 20_998
[**tenantUpdateTenantConnectionPost**](TenantApi.md#tenantupdatetenantconnectionpost) | **POST** /tenant/update-tenant-connection | 20_997
[**tenantUserTenantListGet**](TenantApi.md#tenantusertenantlistget) | **GET** /tenant/user-tenant-list | 20_999

# **tenantDeclineTenantIdGet**
> \Terapi\Client\Model\DeclineTenantInvitationResponse tenantDeclineTenantIdGet($id)

20_996

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 20_996_101 | TenantNotFound | Tenant Not Found | | 20_996_102 | UnknownExceptionWhileFetchingTenant | Unknown exception when checking tenant existence. | | 20_996_103 | UnknownExceptionWhileDecliningTenant | Unknown exception when declining tenant. | | 20_996_104 | TenantIsNotInInvitedStatus |  | | 20_996_105 | UnknownExceptionWhileCheckingIfTenantIsInCorrectStatus |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->tenantDeclineTenantIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantDeclineTenantIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Terapi\Client\Model\DeclineTenantInvitationResponse**](../Model/DeclineTenantInvitationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tenantInviteTenantByApplicationIntegrationIdPost**
> \Terapi\Client\Model\InviteTenantByApplicationIntegrationIdResponse tenantInviteTenantByApplicationIntegrationIdPost($body)

20_998

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 20_998_101 | ApplicationIntegrationNotFound | Application integration not found. | | 20_998_102 | UnknownExceptionWhenCheckApplicationExistence | Unknown exception when checking application existence. | | 20_998_103 | UnknownExceptionWhenCreateTenant | Unknown exception when createing tenant. | | 20_998_104 | UnknownExceptionWhenSendingEmailToInvitedEmailAddress | Unknown exception when sending email to invited email address. | | 20_998_105 | UserNotFound | User not found. | | 20_998_106 | UnknownExceptionWhenInsertApplication | Unknown exception when inserting application. | | 20_998_107 | UnknownExceptionWhenCreateUserTenant | Unknown exception when creating user tenant. | | 20_998_108 | UnknownExceptionWhenCreatingEmailContent | Unknown exception when creating email content. | | 20_998_109 | UnknownExceptionWhenCreatingEmailAcceptInvitationUrl |  | | 20_998_110 | UnknownExceptionWhenAddingTenantInKeycloak |  | | 20_998_111 | UnknownExceptionWhenAddingTenantInOrganization |  | | 20_998_112 | UnknownExceptionWhenCreateTenantUser |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Terapi\Client\Model\TenantInvitetenantbyapplicationintegrationidBody(); // \Terapi\Client\Model\TenantInvitetenantbyapplicationintegrationidBody | 

try {
    $result = $apiInstance->tenantInviteTenantByApplicationIntegrationIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantInviteTenantByApplicationIntegrationIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Terapi\Client\Model\TenantInvitetenantbyapplicationintegrationidBody**](../Model/TenantInvitetenantbyapplicationintegrationidBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\InviteTenantByApplicationIntegrationIdResponse**](../Model/InviteTenantByApplicationIntegrationIdResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tenantInviteTenantPost**
> \Terapi\Client\Model\InviteTenantResponse tenantInviteTenantPost($body)

20_998

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 20_998_101 | ApplicationIntegrationNotFound | Application integration not found. | | 20_998_102 | UnknownExceptionWhenCheckApplicationExistence | Unknown exception when checking application existence. | | 20_998_103 | UnknownExceptionWhenCreateTenant | Unknown exception when createing tenant. | | 20_998_104 | UnknownExceptionWhenSendingEmailToInvitedEmailAddress | Unknown exception when sending email to invited email address. | | 20_998_105 | UserNotFound | User not found. | | 20_998_106 | UnknownExceptionWhenInsertApplication | Unknown exception when inserting application. | | 20_998_107 | UnknownExceptionWhenCreateUserTenant | Unknown exception when creating user tenant. | | 20_998_108 | UnknownExceptionWhenCreatingEmailContent | Unknown exception when creating email content. | | 20_998_109 | UnknownExceptionWhenCreatingEmailAcceptInvitationUrl |  | | 20_998_110 | UnknownExceptionWhenAddingTenantInKeycloak |  | | 20_998_111 | UnknownExceptionWhenAddingTenantInOrganization |  | | 20_998_112 | UnknownExceptionWhenCreateTenantUser |  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Terapi\Client\Model\TenantInvitetenantBody(); // \Terapi\Client\Model\TenantInvitetenantBody | 

try {
    $result = $apiInstance->tenantInviteTenantPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantInviteTenantPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Terapi\Client\Model\TenantInvitetenantBody**](../Model/TenantInvitetenantBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\InviteTenantResponse**](../Model/InviteTenantResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tenantUpdateTenantConnectionPost**
> \Terapi\Client\Model\UpdateTenantConnectionResponse tenantUpdateTenantConnectionPost($body)

20_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 20_997_101 | TenantNotFound | Tenant not found. | | 20_997_102 | UnknownExceptionWhenCheckTenantExistence | Unknown exception when checking tenant existence. | | 20_997_103 | UnknownExceptionWhenUpdateTenantConnection | Unknown exception when updating tenant connection. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Terapi\Client\Model\TenantUpdatetenantconnectionBody(); // \Terapi\Client\Model\TenantUpdatetenantconnectionBody | 

try {
    $result = $apiInstance->tenantUpdateTenantConnectionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantUpdateTenantConnectionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Terapi\Client\Model\TenantUpdatetenantconnectionBody**](../Model/TenantUpdatetenantconnectionBody.md)|  | [optional]

### Return type

[**\Terapi\Client\Model\UpdateTenantConnectionResponse**](../Model/UpdateTenantConnectionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tenantUserTenantListGet**
> \Terapi\Client\Model\UserTenantListResponse tenantUserTenantListGet($invitation_status, $page, $per_page)

20_999

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 20_999_101 | UnknownExceptionWhenTryingFetchTenants | Unknown exception when trying to fetch tenants. | | 20_999_102 | UserNotFound | User not found. | | 20_999_103 | UnknownExceptionWhenInsertApplication | Unknown exception when inserting application. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_status = new \Terapi\Client\Model\InvitationStatus1(); // \Terapi\Client\Model\InvitationStatus1 | 0 = Invited  1 = Accepted  2 = Declined
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $apiInstance->tenantUserTenantListGet($invitation_status, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantUserTenantListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_status** | [**\Terapi\Client\Model\InvitationStatus1**](../Model/.md)| 0 &#x3D; Invited  1 &#x3D; Accepted  2 &#x3D; Declined | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Terapi\Client\Model\UserTenantListResponse**](../Model/UserTenantListResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

