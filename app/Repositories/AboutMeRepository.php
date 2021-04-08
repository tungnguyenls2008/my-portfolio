<?php

namespace App\Repositories;

use App\Models\AboutMe;
use App\Repositories\BaseRepository;

/**
 * Class AboutMeRepository
 * @package App\Repositories
 * @version April 8, 2021, 6:02 am UTC
*/

class AboutMeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'activated'
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
        return AboutMe::class;
    }
}
