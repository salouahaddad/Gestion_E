<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;
use App\Models\Module;

class Notes extends Model
{
    use HasFactory;

   

public function module(){
       
    return $this->belongsTo(Module::class)->withDefault()->get();

}

}
