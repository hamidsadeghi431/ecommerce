<?php

namespace App\Models;

use App\Models\admin\parameters\brandcategory;
use App\Models\product\products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $fillable=['id','catId','categoryName','userInsert','updateInsert','description','active'];

    public function scategory()
    {
        return $this->hasMany(scategories::class,'cat_id','catId');
    }

    public function Brand()
    {
        return $this->belongsToMany(Brands::class);
    }

    public function produts(){
        return $this->belongsTo(products::class,'category_id','catId');
    }

    public function brandcategory()
    {
        return $this->belongsTo(\App\Models\BrandCategory::class,'categories_id','catId');
    }
}
