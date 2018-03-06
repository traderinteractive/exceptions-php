# TraderInteractive Exceptions

[![Build Status](https://travis-ci.org/traderinteractive/exceptions-php.svg?branch=master)](https://travis-ci.org/traderinteractive/exceptions-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/traderinteractive/exceptions-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/traderinteractive/exceptions-php/?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/traderinteractive/exceptions-php/badge.svg?branch=master)](https://coveralls.io/github/traderinteractive/exceptions-php?branch=master)

[![Latest Stable Version](https://poser.pugx.org/traderinteractive/exceptions/v/stable)](https://packagist.org/packages/traderinteractive/exceptions)
[![Latest Unstable Version](https://poser.pugx.org/traderinteractive/exceptions/v/unstable)](https://packagist.org/packages/traderinteractive/exceptions)
[![License](https://poser.pugx.org/traderinteractive/exceptions/license)](https://packagist.org/packages/traderinteractive/exceptions)

[![Total Downloads](https://poser.pugx.org/traderinteractive/exceptions/downloads)](https://packagist.org/packages/traderinteractive/exceptions)
[![Daily Downloads](https://poser.pugx.org/traderinteractive/exceptions/d/daily)](https://packagist.org/packages/traderinteractive/exceptions)
[![Monthly Downloads](https://poser.pugx.org/traderinteractive/exceptions/d/monthly)](https://packagist.org/packages/traderinteractive/exceptions)

Collection of standard exception classes

## Requirements

Requires PHP 7.0 or newer and uses composer to install further PHP dependencies.  See the [composer specification](composer.json) for more details.

## Installation

exceptions-php can be installed for use in your project using [composer](http://getcomposer.org).
The recommended way of using this library in your project is to add a `composer.json` file to your project.  The following contents would add exceptions-php as a dependency:
```sh
composer require traderinteractive/exceptions
```

## Project Build

With a checkout of the code get [Composer](http://getcomposer.org) in your PATH and run:
```sh
composer install
./vendor/bin/phpunit
./vendor/bin/phpcs
```
For more information on our build process, read through out our [Contribution Guidelines](./.github/CONTRIBUTING.md).
