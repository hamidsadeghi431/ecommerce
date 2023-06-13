<?php

namespace App\Models\admin\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class definProperties1 extends Model
{
    use HasFactory;
    protected $table='properties';
    protected $fillable = ['id','idpro','idpar','properties_name','description','active','input_type','created_at','updated_at','update_user_id','created_user_id'];

    public function masterdefinParameters()
    {
//        belongsTo => یعنی بیش از یک رکورد از جدول دیفاین پروپرتیز (برده) با جدول دیفاین پارامیترز (ارباب) ارتباط دارد
//        belongsTo => ارتباط چند رکورد از جدول برده با یک رکورد از جدول ارباب می باشد
        return $this->belongsTo(definParameters1::class,'idp');
    }
}
