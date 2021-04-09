<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UploadDatatable
 * @package App\Models
 * @version April 9, 2021, 7:13 am UTC
 *
 * @property string $name
 * @property string $uri
 * @property string $type
 * @property string $belongs_to_table
 * @property string $belongs_to_id
 */
class UploadDatatable extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'uploads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'uri',
        'type',
        'belongs_to_table',
        'belongs_to_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'uri' => 'string',
        'type' => 'string',
        'belongs_to_table' => 'string',
        'belongs_to_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        'uri' => 'required|string',
        'type' => 'nullable|string',
        'belongs_to_table' => 'required|string',
        'belongs_to_id' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
