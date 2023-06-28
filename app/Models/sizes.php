<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizes extends Model
{
    use HasFactory;
    protected $fillable=['id','sizeId','sizeName','status','sizeDetailsId','description','active','userInsert','userUpdate'];

    public function cpsds()
    {
        $this->primaryKey='sizeId';//        return $this->hasMany(ColorsOriductsSizeSizedetails::class);
    }
}
