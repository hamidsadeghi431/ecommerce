<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BrandScategory extends Pivot
{
    protected $table='brands_scategories';
    protected $fillable=['brands_id','categories_id','scategories_id','insertUser'];
    public function category()
    {
        return $this->belongsTo(categories::class,'catId','categories_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brands::class,'brand_id','brands_id');
    }
//    public function scategory()
//    {
//        return $this->belongsTo(scategories::class,'scatId','scategories_id');
//    }
}
