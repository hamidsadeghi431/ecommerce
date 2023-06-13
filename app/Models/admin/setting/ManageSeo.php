<?php

namespace App\Models\admin\setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageSeo extends Model
{
    use HasFactory;
    protected $table='seo';
    protected $fillable=['title','description','keywords','app_title','active','icon','icon_apple','webaddr','author'];
}
