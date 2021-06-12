<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;

class ProfController extends Controller
{
    public function index ()
     {
        return Professeur::all();
     }

     public function getOneProf($id){
         return $getProf = Professeur::find($id);
     }

     public function store(){
        // Validation : 
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
        ]);


        // Adding : 
        return Professeur::create([
            'nom' => request ('nom'),
            'prenom' =>request('prenom'),
            'email' =>request ('email'),
        ]);

     }

     public function update(Professeur $professeur){
         
        // Validation : 
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
        ]);

        // Updating data : 
        $success = $professeur->update([
            'nom' => request ('nom'),
            'prenom' =>request('prenom'),
            'email' =>request ('email'),
        ]);

        return ['success' => $success];

     }

     public function destroy(Professeur $professeur){
        $success = $professeur->delete();

        return ['success' => $success];
     }

}
