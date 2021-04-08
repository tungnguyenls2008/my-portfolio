<?php

namespace App\Repositories;

use App\Models\AboutMeV2;
use App\Repositories\BaseRepository;

/**
 * Class AboutMeV2Repository
 * @package App\Repositories
 * @version April 8, 2021, 7:07 am UTC
*/

class AboutMeV2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
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
        return AboutMeV2::class;
    }
}
