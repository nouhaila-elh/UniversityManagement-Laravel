<?php

namespace App\Http\Controllers;

use App\Models\Professeur;

use App\Models\Etudiant;
use App\Models\Module;
use App\Http\Resources\EtudiantResource;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function getModulesByProf($id){
        $modules = Professeur::find($id)->modules;
        return $modules;
   }

   public function getNoteByEtudiant($id){
        
        $notes = Etudiant::find($id)->notes;

        return $notes;
   }

    public function getNoteByModule($id){
        
    $notes = Module::find($id)->notes;

    return $notes;
}
}
