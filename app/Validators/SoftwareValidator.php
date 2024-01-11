<?php

namespace App\Validators;

use App\Models\User;
use Illuminate\Validation\Rule;


/**
 * Class LoginValidator
 * @package App\Validators
 */
class SoftwareValidator extends BaseValidator
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
            'operative_system' => [
                'required',
                'string'
            ],
            'stock' => [
                'required',
                'integer'
            ],
            'sku' => [
                'required',
                'string',
                'unique:software,sku',
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
            ],
            'operative_system' => [
                'string'
            ],
            'stock' => [
                'integer'
            ],
        ];

        $this->validate($input, $rule);

    }
}
