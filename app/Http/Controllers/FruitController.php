<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    function index(){
        $allfruits= Fruit::all();
        $name = Fruit::where('name','pomme')->get();
        return view('welcome',compact('allfruits'));
    }

    function show($id){
        $show = Fruit::find($id);
        return view('show',compact('show'));

    }



    function create(){
        return view('/createf');
    }

    function store (Request $request){
        $store = new Fruit();
        $store ->id =$request->id;
        $store ->name =$request->name;
        $store ->quant =$request->quant;
        $store->save();
        return redirect('/');

    }
}
