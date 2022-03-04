<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
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
