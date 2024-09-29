# Number Format To Decimal

<a href="https://packagist.org/packages/davidvandertuijn/number_format_to_decimal"><img src="https://poser.pugx.org/davidvandertuijn/number_format_to_decimal/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_to_decimal"><img src="https://poser.pugx.org/davidvandertuijn/number_format_to_decimal/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_to_decimal"><img src="https://poser.pugx.org/davidvandertuijn/number_format_to_decimal/license.svg" alt="License"></a>

![Number Format To Decimal](https://cdn.davidvandertuijn.nl/github/number_format_to_decimal.png)

The Number Format to Decimal converter is a versatile tool designed to simplify the process of converting numerical values from various formats into a standardized decimal format. This functionality is particularly beneficial for professionals working with data, finance, or programming, where precise numerical representation is crucial.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

## Install

```
composer require davidvandertuijn/number_format_to_decimal
```

## Usage

```php
number_format_to_decimal('1000,99'); // 1000.99
number_format_to_decimal('1000.99'); // 1000.99
number_format_to_decimal('1.000,99'); // 1000.99
number_format_to_decimal('1,000.99'); // 1000.99
number_format_to_decimal('10.000'); // 10000
number_format_to_decimal('100.000'); // 100000
number_format_to_decimal('10,000'); // 10000
number_format_to_decimal('100,000'); // 100000
number_format_to_decimal('1.000.000'); // 1000000
number_format_to_decimal('1.000.000,99'); // 1000000.99
number_format_to_decimal('1,000,000'); // 1000000
number_format_to_decimal('1,000,000.99'); // 1000000.99
```

### Comments

I use this script for many years, if you have a better solution please let me know!
