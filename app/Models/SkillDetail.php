<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SkillDetail
 * @package App\Models
 * @version April 8, 2021, 4:52 am UTC
 *
 * @property integer $skill_id
 * @property string $detail
 * @property integer $percent_achievement
 */
class SkillDetail extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'skill_details';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'skill_id',
        'detail',
        'percent_achievement'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'skill_id' => 'integer',
        'detail' => 'string',
        'percent_achievement' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'skill_id' => 'required|integer',
        'detail' => 'required|string',
        'percent_achievement' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

}
