<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
     use HasFactory;

    protected $table="etudiants";


     protected $primaryKey='id';
    
    protected $fillable=['nom','prenom','email'];

    public function notes()
     {
          return $this->hasMany(Note::class);
     }

     


     public function pves()
     {
          return $this->hasOne(Pfe::class);
     }
}
