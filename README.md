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

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-moyasar-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-moyasar-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-moyasar-views"
```

## Usage

```php
$laravelMoyasar = new RoduanKD\LaravelMoyasar();
echo $laravelMoyasar->echoPhrase('Hello, RoduanKD!');
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
