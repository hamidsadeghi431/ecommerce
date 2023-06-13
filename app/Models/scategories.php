<?php

namespace App\Models;

use App\Models\product\products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scategories extends Model
{
    use HasFactory;

    protected $fillable=['cat_id','scatId','scategoryName','userInsert','userUpdate','description','active'];

    public function category()
    {
        return $this->belongsTo(categories::class,'catId','cat_id');
    }
    public function products()
    {
        return $this->belongsTo(products::class,'scategory_id','scatId');
    }

//    public function brands()
//    {
//        return $this->belongsToMany(Brands::class,'products_categories','scatId','sCatId');
//    }
}
