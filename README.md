# This is my package xero-laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sprint-digital/xero-laravel.svg?style=flat-square)](https://packagist.org/packages/sprint-digital/xero-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sprint-digital/xero-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sprint-digital/xero-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sprint-digital/xero-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sprint-digital/xero-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sprint-digital/xero-laravel.svg?style=flat-square)](https://packagist.org/packages/sprint-digital/xero-laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require sprint-digital/xero-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="xero-laravel-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="xero-laravel-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$xeroLaravel = new Sprintdigital\XeroLaravel();
echo $xeroLaravel->echoPhrase('Hello, Sprintdigital!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Hoang Ho](https://github.com/sprint-digital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
