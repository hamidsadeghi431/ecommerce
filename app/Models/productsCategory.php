<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsCategory extends Model
{
    use HasFactory;
    protected $table='brand_category';
    protected $fillable =['id','brand_id','category_id','userInsert','userUpdate'];
}
