<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Valida un email con filter_var (FILTER_VALIDATE_EMAIL) en lugar de la regla
 * "email" de Laravel 5.8, que usa egulias/email-validator (RFCValidation) y
 * lanza un error fatal bajo PHP 7.4 ("Trying to access array offset on value
 * of type null"). Esta regla es independiente de esa librería.
 */
class ValidEmail implements Rule
{
    public function passes($attribute, $value)
    {
        return is_string($value) && filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function message()
    {
        return 'El campo :attribute debe ser un correo electrónico válido.';
    }
}
