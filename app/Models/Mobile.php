<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobile extends Model
{
    use HasFactory, SoftDeletes;

    public function customer(){
        return $this->belongsTo(Customer::class); // Inverse one to one mapping (Mobile->Customer)
    }


}
