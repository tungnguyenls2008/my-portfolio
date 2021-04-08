<?php

namespace App\Repositories;

use App\Models\SkillDetail;
use App\Repositories\BaseRepository;

/**
 * Class SkillDetailRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:52 am UTC
*/

class SkillDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'skill_id',
        'detail',
        'percent_achievement'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SkillDetail::class;
    }
}
