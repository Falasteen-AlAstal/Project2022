<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
