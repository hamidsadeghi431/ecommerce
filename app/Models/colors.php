<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colors extends Model
{
    use HasFactory;
    protected $fillable =['id','colorId','colorName','userInsert','updateInsert','description','active','colorCode'];

    public function cpsds()
    {
        $this->primaryKey='colorId';
//        return $this->hasMany(ColorsOriductsSizeSizedetails::class,'colors_id');
    }
}
