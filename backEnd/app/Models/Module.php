<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prof;

class Module extends Model
{
    use HasFactory;

    public function prof(){
       
            return $this->belongsTo(Prof::class)->withDefault()->get();
        
    }

   
}
