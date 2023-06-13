<?php

namespace App\Models;

use App\Models\product\products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $fillable=['id','BrandId','brandName','userInsert','userUpdate','description','ScatId','catId','active','picture'];

    public function products()
    {
        return $this->belongsTo(products::class,'BrandId','BrandId');
    }

//    public function brandscat()
//    {
//        return $this->belongsTo(BrandCategory::class,'brands_id','BrandId');
//    }
    public function category()
    {
        return $this->belongsToMany(categories::class)->withPivot('categories_id')->using(BrandCategory::class);
    }
        public function scategory()
    {
        return $this->belongsToMany(scategories::class)->withPivot('scategories_id')->using(BrandScategory::class);
    }
//    public function categry()
//    {
////        return $this->belongsToMany(categories::class);
//    }



}
