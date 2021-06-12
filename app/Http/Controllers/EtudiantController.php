<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
     public function index ()
     {
        return Etudiant::all();
     }

     public function getOneEtd($id){
         return $getEtudiant = Etudiant::find($id);
     }

     public function store(){
        // Validation : 
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
        ]);


        // Adding : 
        return Etudiant::create([
            'nom' => request ('nom'),
            'prenom' =>request('prenom'),
            'email' =>request ('email'),
        ]);

     }

     public function update(Etudiant $etudiant){
         
        // Validation : 
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
        ]);

        // Updating data : 
        $success = $etudiant->update([
            'nom' => request ('nom'),
            'prenom' =>request('prenom'),
            'email' =>request ('email'),
        ]);

        return ['success' => $success];

     }

     public function destroy(Etudiant $etudiant){
        $success = $etudiant->delete();

        return ['success' => $success];
     }

}
