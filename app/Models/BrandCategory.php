<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BrandCategory extends Pivot
{
    protected $table='brands_categories';
    protected $fillable=['brands_id','categories_id','userInsert'];
    public function category()
    {
        return $this->belongsTo(categories::class,'catId','categories_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brands::class,'BrandId','brands_id');
    }
}
