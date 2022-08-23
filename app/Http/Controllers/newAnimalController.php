<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;

class newAnimalController extends Controller
{
    public function newAnimal(){
        $dbAnimal = animal::all();
        return view('pages.newAnimal',compact('dbAnimal'));
    }

    public function storeAnimal(Request $request){
        $storeAnimal = new animal;
        $storeAnimal->genre = $request->genre;
        $storeAnimal->age = $request->age;
        $storeAnimal->save();
        return redirect()->back();

    }
}
