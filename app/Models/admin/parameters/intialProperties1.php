<?php

namespace App\Models\admin\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class intialProperties1 extends Model
{
    use HasFactory;
    protected $table='initializeattrebute';
    protected $fillable=['id','idpro','idparents','idslave','name','description','active','picture','update_user_id','created_user_id'];
}
