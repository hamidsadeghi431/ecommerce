<?php

namespace App\Models\admin\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class defineParameters extends Model
{
    use HasFactory;
    protected $fillable=['idp','parametersname','discription','active','orderby','created_user_id','update_user_id'];

    public function slavedefineproperties()
    {
        return $this->hasMany(definProperties::class,'idpar','idp');
    }

    public function initpro()
    {
        // relation to initProperties table
        return $this->hasMany(initProperties::class,'idpar','idp');
    }


}
