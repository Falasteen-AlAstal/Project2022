<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function orderDetail()
    {
        return $this->hasOne('App\OrderDetail');
    }
    public function shipping()
    {
        return $this->belongsTo('App\ShippingAddress', 'shipping_id');
    }
}
