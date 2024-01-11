<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;



class Software extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'software';

   
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item',
        'value',
        'operative_system',
        'stock',
        'serial',
        'sku'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item' =>'string',
        'value' =>'decimal',
        'operative_system' =>'string',
        'stock' =>'integer',
        'serial' => 'string',
        'sku' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
