<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;

class animalsController extends Controller
{
//Ajoute de donné
    public function displayAnimals(){
        $dbAnimal = animal::all();
        return view('pages.animals',compact('dbAnimal'));
    }
//supprime
    public function deleteAnimal($id){
        $dlAnimal = animal::find($id);
        $dlAnimal->delete();
        return redirect()->back();
    }

    
}
