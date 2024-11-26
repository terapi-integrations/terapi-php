# Terapi\Client\StatisticsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticsUserProfileGet**](StatisticsApi.md#statisticsuserprofileget) | **GET** /statistics/user-profile | 14_997

# **statisticsUserProfileGet**
> \Terapi\Client\Model\UserProfileStatisticsResponse statisticsUserProfileGet()

14_997

### Error Codes | Code | Name | Message | | :--- | :--- | :--- | | 14_997_101 | UserNotFound | User not found. | | 14_997_102 | UserDoesNotHaveActiveSubscription | User does not have an active subscription. | | 14_997_103 | UnknownExceptionWhenFetchUserProfileStatistics | Unknown exception when fetching user profile statistics. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Bearer
    $config = Terapi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Terapi\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->statisticsUserProfileGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsUserProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Terapi\Client\Model\UserProfileStatisticsResponse**](../Model/UserProfileStatisticsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

