<?php

namespace App;
use Modules\Media\Models\MediaFile;
use Illuminate\Database\Eloquent\Model;

class PerfectHoliday extends Model
{
    //
    protected $table = 'perfect_holidays';


    public function GetImage($id){
        $img = MediaFile::where('id',$id)->first();
        // $path = $img->file_path;
        $data = ['image' => $img->file_path,];
        return $img;
    }

}
