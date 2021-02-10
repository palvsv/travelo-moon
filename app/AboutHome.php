<?php

namespace App;
use Modules\Media\Models\MediaFile;
use Illuminate\Database\Eloquent\Model;

class AboutHome extends Model
{
    //
    protected $table = "about_homes";

    protected $filable = ['title','subtitle','description','button_url','button_text','image_id'];

    public function GetImagePath($id){
        $img = MediaFile::where('id',$id)->first();
        // $path = $img->file_path;
        $data = ['image' => $img->file_path];
        return $img;

    }
}
