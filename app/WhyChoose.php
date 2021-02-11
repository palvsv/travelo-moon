<?php

namespace App;

use Modules\Media\Models\MediaFile;
use Illuminate\Database\Eloquent\Model;

class WhyChoose extends Model
{
    //
    protected $table = 'why_chooses';

    protected $filable = ['title','subtitle','featured_image','item_one','content_one','image_one','item_two','content_two','image_two','item_three','content_three',
                            'content_three','image_three','item_four','content_four','image_four'
                            ];


    public function GetImagePath($id){
        $img = MediaFile::where('id',$id)->first();
        // $path = $img->file_path;
        $data = ['image' => $img->file_path,];
        return $img;

    }
}
