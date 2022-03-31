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

    // Check if the comma separator exists.

    if (strpos($value, ',') !== false) {
        $countCommaSeperators += substr_count($value, ',');
    }

    // Check if the dot separator exists.

    if (strpos($value, '.') !== false) {
        $countDotSeperators += substr_count($value, '.');
    }

    // If there is one separator, and it is a comma.

    if ($countCommaSeperators == 1 && $countDotSeperators == 0) {
        $countDecimals = strlen(substr($value, strpos($value, ",") + 1));

        // If there are 3 decimal places, we can assume that it is a thousand.

        if ($countDecimals == 3) {
            // Remove the comma.
            $decimal = str_replace(',', '', $value);
        } else {
            // Replace the comma with a period.
            $decimal = str_replace(',', '.', $value);
        }
    }

    // If there's one separator, and it's a dot.

    elseif ($countCommaSeperators == 0 && $countDotSeperators == 1) {
        $countDecimals = strlen(substr($value, strpos($value, ".") + 1));

        // If there are 3 decimal places, we can assume that it is a thousand.

        if ($countDecimals == 3) {
            // We remove the period.
            $decimal = str_replace('.', '', $value);
        } else {
            // Do Noting
            $decimal = $value;
        }
    }

    // If there are two different separators.

    elseif ($countCommaSeperators == 1 && $countDotSeperators == 1) {
        $decimal = str_replace(',', '.', $value);
        $decimal = preg_replace('/[.](?![^.]*$)/', '', $decimal);
    }

    // If there are multiple dot separators but no comma separators.

    elseif ($countCommaSeperators == 0 && $countDotSeperators > 1) {
        $decimal = str_replace('.', '', $value);
    }

    // If there are multiple comma separators but no dot separators.

    elseif ($countCommaSeperators > 1 && $countDotSeperators == 0) {
        $decimal = str_replace(',', '', $value);
    }

    // If there are multiple dot separators and one comma separator.

    elseif ($countCommaSeperators == 1 && $countDotSeperators > 1) {
        $decimal = str_replace('.', '', $value);
        $decimal = str_replace(',', '.', $decimal);
    }

    // If there are multiple comma separators and one dot separator.

    elseif ($countCommaSeperators > 1 && $countDotSeperators == 1) {
        $decimal = str_replace(',', '', $value);
    } else {
        $decimal = $value;
    }

    return $decimal;
}
