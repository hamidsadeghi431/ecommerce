<?php

namespace App\Models\admin\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class definParameters1 extends Model
{
    use HasFactory;
    protected $table='defineparameters';
    protected $fillable=['idp','parametersname','discription','active','created_user_id','update_user_id'];

    public function slavedefinProperties()
    {
//        hasMany=> هر رکورد جدول دیفاین پارامیترز ارتباط دارد با چند رکورد از جدول دیفاین پراپرتیز
//        hasMany => هر رکورد از جدول ارباب بی نهایت ارتباط با جدول برده دارد
        return $this->hasMany(definProperties1::class,);
    }
}
