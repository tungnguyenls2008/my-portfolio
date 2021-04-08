<?php

namespace App\Repositories;

use App\Models\Testimony;
use App\Repositories\BaseRepository;

/**
 * Class TestimonyRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:51 am UTC
*/

class TestimonyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'content',
        'reference'
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
        return Testimony::class;
    }
}
