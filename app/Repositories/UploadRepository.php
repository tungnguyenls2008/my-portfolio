<?php

namespace App\Repositories;

use App\Models\Upload;
use App\Repositories\BaseRepository;

/**
 * Class UploadRepository
 * @package App\Repositories
 * @version April 9, 2021, 2:11 am UTC
*/

class UploadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'uri',
        'type',
        'belongs_to'
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
        return Upload::class;
    }
}
