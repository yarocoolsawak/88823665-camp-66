<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    //
    protected $table = 'product_list';
    public $timestamps = false;

    function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
