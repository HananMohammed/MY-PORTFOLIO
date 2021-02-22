<?php


namespace App\Traits;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait StoreUpdateTrait
{
    /**Store data and upload image dynamically
     * @param $request
     * @param $model
     */
    public function storeData($request, $model)
    {
        $this->dataProcess($request, $model);

        if (is_array($request->file()))
        {
            $this->fileProcess($request, $model);
        }
        $model->created_by = auth()->user()->id;

        $model -> save() ;
    }
    /** Update data,Delete Old image if new on uploaded dynamically
     * @param $request
     * @param $model
     */
    public function updateData($request, $model)
    {

        $this->dataProcess($request, $model);

        if (is_array($request->file()) && !empty($request->file()))
        {
            $this->deleteFile($model);
            $this->fileProcess($request, $model);
        }

        $model->created_by = auth()->user()->id;

        $model -> save() ;
    }

    /** Handle data of type input
     * @param $request
     * @param $model
     */
    protected function dataProcess($request, $model)
    {
        foreach ( $request->input() as $key => $value)
        {
            if($key !='_token' && $key != '_method')
            {
                if(is_array($value))
                {
                    $translatedData = array();
                    foreach ($value as $itemValue)
                    {
                        array_push($translatedData, $itemValue);
                    }
                    $model->$key = ['en' => $translatedData[0],'ar' => $translatedData[1]];
                }
                else
                {
                    $model->$key = $value ;
                }

            }
        }

    }

    /** Handle Data of Type File
     * @param $request
     * @param $model
     */
    protected function fileProcess($request, $model)
    {
        foreach ($request->file() as $key => $value)
        {
            if (!is_array($value))
            {
                $fileName = $this->upload_image($value);
                $model->$key = $fileName;
            }
        }

    }

    protected function deleteFile( $model)
    {
        $file_path = storage_path().'/app/public/uploads/'.$model->image;

        if(File::exists($file_path))
        {
            unlink($file_path); //delete from storage
        }

    }
}
