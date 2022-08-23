<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;

class updateAnimalController extends Controller
{
    public function updatPage($id){
        $dbAnimal = animal::find($id);
        // dd($id);
        return view('pages.updateAnimal',compact('dbAnimal'));
    }
    //update
    public function updateAnimal(Request $request, $id){
        $updateAnimal = animal::find($id);
        $updateAnimal->genre = $request->genre;
        $updateAnimal->age = $request->age;
        $updateAnimal->save();
        return redirect()->back();

    }
}
