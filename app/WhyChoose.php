<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhyChoose extends Model
{
    //
    protected $table = 'why_chooses';

    protected $filable = ['title','subtitle','item_one','content_one','image_one','item_two','content_two','image_two','item_three','content_three',
                            'content_three','image_three','item_four','content_four','image_four'
                            ];
}
