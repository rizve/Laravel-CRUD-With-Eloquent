<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['brand_id','product_name'];


    public function brand()
    {
        return $this->belongsTo('App\brand', 'brand_id');
    }
}
