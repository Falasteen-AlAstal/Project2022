<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class OrderDetail extends Model
{
    use SoftDeletes;
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
