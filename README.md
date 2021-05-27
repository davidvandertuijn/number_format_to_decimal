# Number Format To Decimal

<a href="https://packagist.org/packages/davidvandertuijn/number_format_to_decimal"><img src="https://poser.pugx.org/davidvandertuijn/number_format_to_decimal/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_to_decimal"><img src="https://poser.pugx.org/davidvandertuijn/number_format_to_decimal/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_to_decimal"><img src="https://poser.pugx.org/davidvandertuijn/number_format_to_decimal/license.svg" alt="License"></a>

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
number_format_to_decimal('1.000.000'); // 1000000
number_format_to_decimal('1.000.000,99'); // 1000000.99
number_format_to_decimal('1,000,000'); // 1000000
number_format_to_decimal('1,000,000.99'); // 1000000.99
```

### Comments

I use this script for many years, if you have a better solution please let me know!
