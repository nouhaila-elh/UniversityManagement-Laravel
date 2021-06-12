<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Module;
use App\Models\Etudiant;

class Note extends Model
{
    protected $table= "notes";
    use HasFactory;

    public function etudiants()
    {
         return $this->belongsTo(Etudiant::class);
    }

    public function modules()
    {
         return $this->hasOne(Module::class);
    }
}
