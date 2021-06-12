<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
use App\Models\Pfe;

class Professeur extends Model
{

    protected $table= "professeurs";

    use HasFactory;
    
    protected $fillable=['nom','prenom','email'];

   public function modules()
     {
          return $this->hasMany(Module::class);
     }
      
     public function pves(){
          return $this->hasMany(Pfe::class);
     }
}
