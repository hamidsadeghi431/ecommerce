<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ColorsOriductsSizeSizedetails extends Pivot
{
    protected $table='colors_products_sizes_sizedetails';
    protected $fillable=['id','products_id','sizes_id','sizedetails_id','colors_id','qty','userInsert','userupdate'];

    public function size_name()
    {
        $this->setPivotKeys('sizes_id','sizeId');
//        $this->primaryKey='sizes_id';
//        $this->setPivotKeys('sizeId','sizeId');
        return $this->belongsTo(sizes::class,'sizes_id','sizeId');
    }

    public function size_details_name()
    {
//        $this->primaryKey='sizedetails_id';
        $this->setPivotKeys('sizedetails_id','sizedetails_id');
        return $this->belongsTo(sizedetails::class,'id');
    }

    public function colors_name()
    {
        $this->primaryKey='colors_id';
        return $this->belongsTo(colors::class,'id');
    }

    public function purchase()
    {
        return $this->belongsTo(purchase::class,'idcsd','id');
    }
}
