<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $fillable=[
        'userId','billNo','qty','idcsd','userInsert','paystatus','status','userUpdate','transactionNo','price'
    ];
}
