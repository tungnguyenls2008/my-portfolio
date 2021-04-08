<?php

namespace App\Repositories;

use App\Models\Goal;
use App\Repositories\BaseRepository;

/**
 * Class GoalRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:51 am UTC
*/

class GoalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return Goal::class;
    }
}
