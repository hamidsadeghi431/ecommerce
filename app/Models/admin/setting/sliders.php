<?php

namespace App\Models\admin\setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    use HasFactory;
    protected $fillable=['title1','title2','title3','colorCode1','colorCode2','colorCode3','links','titleButton','titleImage','Image','active','userInsert','userUpdate'];
}
