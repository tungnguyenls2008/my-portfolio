<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AboutMeV2
 * @package App\Models
 * @version April 8, 2021, 7:07 am UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $occupation
 * @property string $description
 * @property integer $activated
 */
class AboutMeV2 extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'about';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'occupation',
        'description',
        'activated'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'occupation' => 'string',
        'description' => 'string',
        'activated' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string',
        'last_name' => 'nullable|string',
        'occupation' => 'required|string',
        'description' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'activated' => 'nullable|integer'
    ];


}
