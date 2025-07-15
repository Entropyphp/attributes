# pg-attributes

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-blue.svg)](https://php.net)
[![Latest Stable Version](http://poser.pugx.org/willy68/pg-attributes/v)](https://packagist.org/packages/willy68/pg-attributes)
[![Total Downloads](http://poser.pugx.org/willy68/pg-attributes/downloads)](https://packagist.org/packages/willy68/pg-attributes)
[![Latest Unstable Version](http://poser.pugx.org/willy68/pg-attributes/v/unstable)](https://packagist.org/packages/willy68/pg-attributes)
[![PHP Version Require](http://poser.pugx.org/willy68/pg-attributes/require/php)](https://packagist.org/packages/willy68/pg-attributes)
[![Coverage Status](https://coveralls.io/repos/github/willy68/pg-attributes/badge.svg?branch=main)](https://coveralls.io/github/willy68/pg-attributes?branch=main)
[![Continuous Integration](https://github.com/willy68/pg-attributes/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/willy68/pg-attributes/actions/workflows/ci.yml)


A simple attributes loader for PHP projects.

## Features

- Load and manage PHP attributes easily
- Composer integration
- Custom PHP token parser
- Simple and intuitive API
- Complete tests with PHPUnit

Un lecteur d'attributs simple et efficace pour les projets PHP 8.1+.

## Installation

Use Composer to install:

PHP 8.1 or higher
```bash
composer require willy68/pg-attributes
```
```php
use Pg\Attributes\AttributesReader;

$loader = new AttributesReader();
$attributes = $loader->getClassAttributes($reflectionClass, $attributeClassName);
```

##License
This project is licensed under the MIT License.