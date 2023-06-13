<?php

namespace App\Models;

use App\Models\product\products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductNames extends Model
{
    use HasFactory;
    protected $fillable =['ProId','ProductName','userInsert','updateInsert','description','active'];

    public function product()
    {
        return $this->belongsTo(products::class,'product_id','ProId');
    }



}
