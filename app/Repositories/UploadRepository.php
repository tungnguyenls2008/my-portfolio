<?php

namespace App\Repositories;

use App\Models\Upload;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

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
    public function doUpload(Request $request,$model,$name_prefix,$table){
        if ($request->hasfile('images')) {
            $request->validate([
                'images' => 'required',
            ]);
            $images = $request->file('images');

            foreach($images as $key=> $image) {

                $name = $name_prefix.'_'.$model->id.'_0'.$key.'.'.pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
                $path = $image->storeAs('uploads/images', $name, 'public');

                Upload::create([
                    'name' => $name,
                    'uri' => '/storage/'.$path,
                    'belongs_to_table'=>$table,
                    'belongs_to_id'=>$model->id,
                ]);
            }

        }

    }
}
