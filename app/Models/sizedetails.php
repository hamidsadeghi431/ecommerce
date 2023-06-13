<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizedetails extends Model
{
    use HasFactory;
    protected $fillable=['id','sizeDetailsId','title','description','active','userInsert','userUpdate'];

    public function cpsds()
    {
        $this->primaryKey='sizeDetailsId';
//        return $this->hasMany(ColorsOriductsSizeSizedetails::class,'colors_id');
    }

}
