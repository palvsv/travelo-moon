<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Modules\Media\Models\MediaFile;

class HomeHoliday extends Model
{
    //
    protected $table = "home_holidays";

    protected $filable = ['image_id','image_pos','place_name','url'];

    public function GetHolidayData($id){
        $item = HomeHoliday::where('image_pos',$id)->first();
        $img = MediaFile::where('id',$item->image_id)->first();
        // $path = $img->file_path;
        $data = [
            'image' => $img->file_path,
            'position' => $item->image_pos,
            'place' => $item->place_name,
            'url' => $item->url,
        ];
        return $data;
    }

}
