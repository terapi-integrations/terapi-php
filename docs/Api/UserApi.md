# Terapi\Client\UserApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCreateOrGetUserProfilePost**](UserApi.md#usercreateorgetuserprofilepost) | **POST** /user/create-or-get-user-profile | 14_998

# **userCreateOrGetUserProfilePost**
> \Terapi\Client\Model\CreateUserProfileResponse userCreateOrGetUserProfilePost()

14_998

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 14_998_101 | UnknownExceptionWhenFetchJwtUserProfile | Unknown exception when fetching JWT user profile. | | 14_998_102 | UnknownExceptionWhenCreateUserProfile | Unknown exception when creating user profile. | | 14_998_103 | IncorrectDataInUserJwtPayload | Incorrect data in user JWT payload. | | 14_998_104 | UnknownExceptionWhenSubscribeUserToFreePlan | Unknown exception when subscribing user to free plan. | | 14_998_105 | UserAlreadyExistInDataStorage | Logged user not found in data storage. | | 14_998_106 | UnknownExceptionWhenCheckUserExistence | Unknown exception when fetching logged user profile. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userCreateOrGetUserProfilePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCreateOrGetUserProfilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Terapi\Client\Model\CreateUserProfileResponse**](../Model/CreateUserProfileResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

