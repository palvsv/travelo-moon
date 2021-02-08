<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutHome extends Model
{
    //
    protected $table = "about_homes";

    protected $filable = ['title','subtitle','description','button_url','button_text'];
}
