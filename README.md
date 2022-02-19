# This is my package laravel-moyasar

[![Latest Version on Packagist](https://img.shields.io/packagist/v/roduankd/laravel-moyasar.svg?style=flat-square)](https://packagist.org/packages/roduankd/laravel-moyasar)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/roduankd/laravel-moyasar/run-tests?label=tests)](https://github.com/roduankd/laravel-moyasar/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/roduankd/laravel-moyasar/Check%20&%20fix%20styling?label=code%20style)](https://github.com/roduankd/laravel-moyasar/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/roduankd/laravel-moyasar.svg?style=flat-square)](https://packagist.org/packages/roduankd/laravel-moyasar)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require roduankd/laravel-moyasar
```

Then you need to define these variables in .env
```dotenv
MOYASAR_PUBLISHABLE_API_KEY="your api key goes here"
MOYASAR_CURRENCY=USD
```

Optionally, you can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-moyasar-config"
```

This is the contents of the published config file:

```php
return [
    // Required
    // Specify where to render the form
    // Can be a valid CSS selector and a reference to a DOM element
    'element' => '.mysr-form',

    // Required
    // Currency of the payment transaction
    'currency' => env('MOYASAR_CURRENCY', 'USD'),

    // Required
    // A small description of the current payment process
    'description' => 'default description',

    // Required
    'publishable_api_key' => env('MOYASAR_PUBLISHABLE_API_KEY', null),

    // Required
    // This URL is used to redirect the user when payment process has completed
    // Payment can be either a success or a failure, which you need to verify on you system (We will show this in a couple of lines)
    'callback_url' => 'moyasar.callback',

    // Highly recommended
    // This URL is use by moyasar to send to save the payment ID before redirecting the user to 3-D Secure
    // this is the default on complete route name
    'on_complete_url' => 'moyasar.complete',

    // Optional
    // Required payments methods
    // Default: ['creditcard', 'applepay', 'stcpay']
    'methods' => ['creditcard', 'applepay', 'stcpay'],
];

```
Then, you'll need to define the "moyasar.callback" and "moyasar.complete" routes
```php
Route::get('memberships/{membership}/payment/thanks', [MembershipController::class, 'thanks'])->name('moyasar.callback');
Route::post('memberships/{membership}/payment/completed', [MembershipController::class, 'completed'])->name('moyasar.complete');
```
**note**: you can define the routes however you want.

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-moyasar-views"
```

## Usage

add moysar style to you page to the page head.
```php
@include('moyasar::head')
```
then include init component and provide all the options you need
```php
<x-moyasar-init amount="100" />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Roduan Kareem Aldeen](https://github.com/RoduanKD)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
