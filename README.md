# pg-attributes

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-blue.svg)](https://php.net)

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