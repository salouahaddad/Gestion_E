<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notes;

class Etudiant extends Model
{
    use HasFactory;

    public function Note()
{
    return $this->belongsTo(Notes::class, 'id', 'etudiant_id')->get();
}

}
