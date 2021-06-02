<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    Public function getRouteKeyName()
    {
        return 'slug';
    }

}
