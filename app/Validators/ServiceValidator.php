<?php

namespace App\Validators;

use App\Models\User;
use Illuminate\Validation\Rule;


/**
 * Class LoginValidator
 * @package App\Validators
 */
class ServiceValidator extends BaseValidator
{

    /**
     * @param array $dataIds
     */
    public function create($input)
    {
        $rule = [
            'item' => [
                'required',
                'string'
            ],
            'price' => [
                'required',
                'numeric'
            ],
            'sku' => [
                'required',
                'string',
                'unique:service,sku',
                'digits:10'
            ]

        ];

        $this->validate($input, $rule);

    }
    public function update($input)
    {
        $rule = [
            'id' => [
                'required',
                'integer'
            ],
            'item' => [
                'string'
            ],
            'price' => [
                'numeric'
            ]
        ];

        $this->validate($input, $rule);

    }
}
