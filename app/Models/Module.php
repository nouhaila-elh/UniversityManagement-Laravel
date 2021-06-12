<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professeur;

class Module extends Model
{
    protected $table= "modules";
    use HasFactory;
    
    public function professeurs()
      {
           return $this->belongsTo(Professeur::class);
      }

      public function notes()
      {
           return $this->hasMany(Note::class);
      }

}
