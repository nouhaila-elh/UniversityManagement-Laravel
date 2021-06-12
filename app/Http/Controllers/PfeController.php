<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Etudiant;
use App\Models\Professeur;

class PfeController extends Controller
{
    public function getPfeByProf($id){
        $pfe = Professeur::find($id)->pves;
        return $pfe;
   }

   public function getPfeByEtudiant($id){
    $pfe = Etudiant::find($id)->pves;
    return $pfe;
   }
}
