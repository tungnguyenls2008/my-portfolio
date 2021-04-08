<?php

namespace App\Repositories;

use App\Models\DoneProject;
use App\Repositories\BaseRepository;

/**
 * Class DoneProjectRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:52 am UTC
*/

class DoneProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'short_desc',
        'long_desc'
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
        return DoneProject::class;
    }
}
