<?php

namespace App\Models\admin\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class definProperties extends Model
{
    use HasFactory;
    protected $fillable = ['idpro','idpar','properties_name','description','active','input_type','orderby','father_slave','created_at','updated_at','update_user_id','created_user_id'];

    public function masterdefineParameters()
    {
        return $this->belongsTo(defineParameters::class,'idpar','idp');
    }
    public function initpro()
    {
        return $this->hasMany(initProperties::class,'idpro','idpro');
    }
}
