<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DoneProject
 * @package App\Models
 * @version April 8, 2021, 4:52 am UTC
 *
 * @property string $name
 * @property string $image
 * @property string $short_desc
 * @property string $long_desc
 */
class DoneProject extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'done_projects';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'image',
        'short_desc',
        'long_desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'short_desc' => 'string',
        'long_desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        'image' => 'string',
        'short_desc' => 'required|string',
        'long_desc' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}
