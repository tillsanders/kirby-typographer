<?php

namespace Hananils\Corrections;

use Hananils\Correction;

class Dashes extends Correction
{
    public $replacements = [
        // n-dashes: single hyphen, double hyphen, n-dash
        '/ (-|--|—) /im' => Correction::NO_BREAK_SPACE . '– ',

        // m-dashes: tripple hyphen, m-dash
        '/ (---|—) /im' => Correction::NO_BREAK_SPACE . '— ',

        // ranges
        '/(\d)-(\d)/im' => '$1–$2'
    ];
}
