<?php

namespace App\Validators;

use App\Models\User;
use Illuminate\Validation\Rule;
use App\Rules\ValidationIdentification;


/**
 * Class LoginValidator
 * @package App\Validators
 */
class UserValidator extends BaseValidator
{

    /**
     * @param array $dataIds
     */
    public function register($input)
    {
        $rule = [
            'name' => [
                'required',
            ],
            'email' => [
                'required',
                new ValidationIdentification(),

            ],
            'password' => [
                'required'
            ]

        ];

        $this->validate($input, $rule);

    }

}
