<?php

namespace App\Repositories;

use App\Models\Story;
use App\Repositories\BaseRepository;

/**
 * Class StoryRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:50 am UTC
*/

class StoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'content'
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
        return Story::class;
    }
}
