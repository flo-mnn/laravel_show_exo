<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return view('welcome');
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $newEntry = new Ingredient();
        $newEntry->name = $request->name; 
        $newEntry->quantity = $request->quantity; 
        $newEntry->measure = $request->measure; 
        $newEntry->img = $request->img; 
        $newEntry->save();
        return redirect()->back();
    }

    public function destroy($id){
        $destroy = Ingredient::find($id);
        $destroy->delete();

        return redirect('/');
    }

    public function show($id){
        return view('pages.show',['ingredient'=> Ingredient::find($id)]);
    }
}
