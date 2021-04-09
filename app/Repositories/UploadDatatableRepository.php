<?php

namespace App\Repositories;

use App\Models\UploadDatatable;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

/**
 * Class UploadDatatableRepository
 * @package App\Repositories
 * @version April 9, 2021, 7:13 am UTC
*/

class UploadDatatableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'uri',
        'type',
        'belongs_to_table',
        'belongs_to_id'
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
        return UploadDatatable::class;
    }
    /**
     * Do upload
     **/
    public function doUpload(Request $request,$model,$name_prefix,$table){
        if ($request->hasfile('images')) {
            $request->validate([
                'images' => 'required',
            ]);
            $images = $request->file('images');

            foreach($images as $key=> $image) {

                $name = $name_prefix.'_'.$model->id.'_0'.$key.'.'.pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
                $path = $image->storeAs('uploads/images', $name, 'public');

                UploadDatatable::create([
                    'name' => $name,
                    'uri' => '/storage/'.$path,
                    'belongs_to_table'=>$table,
                    'belongs_to_id'=>$model->id,
                ]);
            }

        }

    }

}
