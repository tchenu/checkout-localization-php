# checkout-localization-php #

This library allows to translate the PSP Checkout (http://checkout.com/) errors via response code (https://www.checkout.com/docs/resources/codes/response-codes).

## Requirements ##

* [PHP 7.3 or higher](https://www.php.net/)

## Languages supported ##

* FR
* EN

## Installation ##

### Composer

Execute the following command to install this library:

```sh

composer require icarusmediadigital/checkout-localization-php

```

Include the autoloader

```php

require_once  'vendor/autoload.php';

```

## How to translate

```php

$translator = new CheckoutLocalization\Translator();
$translator->translate('30033', 'fr'); // "Carte expirée" 

```