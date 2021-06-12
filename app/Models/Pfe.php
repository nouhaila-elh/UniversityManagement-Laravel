<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pfe extends Model
{
    protected $table="pves";
    use HasFactory;

    public function professeurs()
      {
           return $this->belongsTo(Professeur::class);
      }
}
