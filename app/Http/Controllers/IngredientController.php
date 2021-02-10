<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return view('welcome',compact('ingredients'));
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

    public function edit($id){
        return view('pages.edit',['ingredient'=> Ingredient::find($id)]);
    }

    public function update(Request $request, $id){
        $update = Ingredient::find($id);
        $update->name = $request->name; 
        $update->quantity = $request->quantity; 
        $update->measure = $request->measure; 
        $update->img = $request->img; 
        $update->save();
        return redirect('/ingredient-show/'.$update->id);
    }

    public function show($id){
        return view('pages.show',['ingredient'=> Ingredient::find($id)]);
    }
}
