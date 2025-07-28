# attributes

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.2-blue.svg)](https://php.net)
[![Coverage Status](https://coveralls.io/repos/github/Entropyphp/attributes/badge.svg?branch=main)](https://coveralls.io/github/Entropyphp/attributes?branch=main)
[![Continuous Integration](https://github.com/Entropyphp/attributes/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/Entropyphp/attributes/actions/workflows/ci.yml)


A simple attributes loader for PHP projects.

## Features

- Load and manage PHP attributes easily
- Custom PHP token parser
- Simple and intuitive API

## Installation

Use Composer to install:

PHP 8.2 or higher
```bash
composer require willy68/pg-attributes
```
```php
use koriym\Attributes\AttributeReader;
use Pg\Attributes\AttributesReader;

$loader = new AttributesReader(new AttributeReader());
$attributes = $loader->getClassAttributes($reflectionClass, $attributeClassName);
```

## License
This project is licensed under the MIT License.