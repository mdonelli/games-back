<?php

namespace App\Models;

class Country
{
    const UK = 'The United Kingdom';
    const Germany = 'Germany';
    const Italy = 'Italy';
    const France = 'France';

    /**
     * @param string $country
     * @return bool
     */
    public static function isSupported(string $country) :bool
    {
        return in_array($country, [
            self::UK,
            self::Germany,
            self::Italy,
            self::France,
        ]);
    }
}
