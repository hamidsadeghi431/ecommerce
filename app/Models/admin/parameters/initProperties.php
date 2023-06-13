<?php

namespace App\Models\admin\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class initProperties extends Model
{
    use HasFactory;
    protected $fillable=['idpar','idpro','idparents','idslave','properties_name','description','active','picture','orderby','update_user_id','created_user_id'];

    public function initpro()
    {
        return $this->belongsTo(definProperties::class,'idpro','idpro');
    }

    public function defPar()
    {
//        relation to defineParameters Table
        return $this->belongsTo(defineParameters::class,'idpar','idp');
    }
}
