<?php

/**
 * Number Format To Decimal.
 *
 * @param string|null $value
 *
 * @return mixed
 */
function number_format_to_decimal(?string $value)
{
    if (is_null($value)) {
        return null;
    }
    
    $countCommaSeperators = 0;
    $countDotSeperators = 0;

    // Controleren of de komma seperator voorkomt.

    if (strpos($value, ',') !== false) {
        $countCommaSeperators += substr_count($value, ',');
    }

    // Controleren of de punt seperator voorkomt.

    if (strpos($value, '.') !== false) {
        $countDotSeperators += substr_count($value, '.');
    }

    // Indien er één seperator is, en het is een komma, dan vervangen we de komma door een punt.

    if ($countCommaSeperators == 1 && $countDotSeperators == 0) {
        $decimal = str_replace(',', '.', $value);
    }

    // Indien er één seperator is, en het is een punt, dan doen we niets.

    elseif ($countCommaSeperators == 0 && $countDotSeperators == 1) {
        $decimal = $value;
    }

    // Indien er twee verschillende seperators zijn.

    elseif ($countCommaSeperators == 1 && $countDotSeperators == 1) {
        $decimal = str_replace(',', '.', $value);
        $decimal = preg_replace('/[.](?![^.]*$)/', '', $decimal);
    }

    // Indien er meererde punt seperators zijn maar geen komma seperators.

    elseif ($countCommaSeperators == 0 && $countDotSeperators > 1) {
        $decimal = str_replace('.', '', $value);
    }

    // Indien er meererde komma seperators zijn maar geen punt seperators.

    elseif ($countCommaSeperators > 1 && $countDotSeperators == 0) {
        $decimal = str_replace(',', '', $value);
    }

    // Indien er meerdere punt seperators zijn en één komma seperator.

    elseif ($countCommaSeperators == 1 && $countDotSeperators > 1) {
        $decimal = str_replace('.', '', $value);
        $decimal = str_replace(',', '.', $decimal);
    }

    // Indien er meerdere komma seperators zijn en één punt seperator.

    elseif ($countCommaSeperators > 1 && $countDotSeperators == 1) {
        $decimal = str_replace(',', '', $value);
    } else {
        $decimal = $value;
    }

    return $decimal;
}
