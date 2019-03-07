<?php

/**
 * Number Format To Decimal.
 *
 * @param string $sValue
 *
 * @return string $sDecimal
 */
function number_format_to_decimal($sValue)
{
    $iCountCommaSeperators = 0;
    $iCountDotSeperators = 0;

    // Controleren of de komma seperator voorkomt.

    if (strpos($sValue, ',') !== false) {
        $iCountCommaSeperators += substr_count($sValue, ',');
    }

    // Controleren of de punt seperator voorkomt.

    if (strpos($sValue, '.') !== false) {
        $iCountDotSeperators += substr_count($sValue, '.');
    }

    // Indien er één seperator is, en het is een komma, dan vervangen we de komma door een punt.

    if ($iCountCommaSeperators == 1 && $iCountDotSeperators == 0) {
        $sDecimal = str_replace(',', '.', $sValue);
    }

    // Indien er één seperator is, en het is een punt, dan doen we niets.

    elseif ($iCountCommaSeperators == 0 && $iCountDotSeperators == 1) {
        $sDecimal = $sValue;
    }

    // Indien er twee verschillende seperators zijn.

    elseif ($iCountCommaSeperators == 1 && $iCountDotSeperators == 1) {
        $sDecimal = str_replace(',', '.', $sValue);
        $sDecimal = preg_replace('/[.](?![^.]*$)/', '', $sDecimal);
    }

    // Indien er meererde punt seperators zijn maar geen komma seperators.

    elseif ($iCountCommaSeperators == 0 && $iCountDotSeperators > 1) {
        $sDecimal = str_replace('.', '', $sValue);
    }

    // Indien er meererde komma seperators zijn maar geen punt seperators.

    elseif ($iCountCommaSeperators > 1 && $iCountDotSeperators == 0) {
        $sDecimal = str_replace(',', '', $sValue);
    }

    // Indien er meerdere punt seperators zijn en één komma seperator.

    elseif ($iCountCommaSeperators == 1 && $iCountDotSeperators > 1) {
        $sDecimal = str_replace('.', '', $sValue);
        $sDecimal = str_replace(',', '.', $sDecimal);
    }

    // Indien er meerdere komma seperators zijn en één punt seperator.

    elseif ($iCountCommaSeperators > 1 && $iCountDotSeperators == 1) {
        $sDecimal = str_replace(',', '', $sValue);
    } else {
        $sDecimal = $sValue;
    }

    return $sDecimal;
}
