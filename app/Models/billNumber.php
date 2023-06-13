<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billNumber extends Model
{
    use HasFactory;
    protected $fillable=['bill_number'];
}
