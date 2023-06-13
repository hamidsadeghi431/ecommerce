<?php

namespace App\Models\product;

use App\Models\Brands;
use App\Models\categories;
use App\Models\ColorsOriductsSizeSizedetails;
use App\Models\ProductNames;
use App\Models\scategories;
use App\Models\sizes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable =['product_id','category_id','scategory_id','BrandId','colorId','shortDescription','longDescription','originalPrice','sellingPrice',
                          'quantity','trending','active','metaTitle','metaKeyword','metaDescription','inStock','image','images','insertUser','updateUser'
        ];

    public function productName()
    {
        return $this->hasMany(ProductNames::class,'ProId','product_id');
    }
    public function category()
    {
        return $this->hasMany(categories::class,'catId','category_id');
    }
    public function scategory()
    {
        return $this->hasMany(scategories::class,'scatId','scategory_id');
    }
    public function brands()
    {
        return $this->hasMany(Brands::class,'BrandId','BrandId');
    }

    public function size_name()
    {
//        return $this->belongsToMany(ColorsOriductsSizeSizedetails::class );
    }


}
