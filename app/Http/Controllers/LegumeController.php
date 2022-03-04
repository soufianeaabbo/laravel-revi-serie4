<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class LegumeController extends Controller
{
    function create2(){
        return view('/createl');
    }

    function store (Request $request){
        $store = new Legume();
        $store ->id =$request->id;
        $store ->name =$request->name;
        $store ->quant =$request->quant;
        $store->save();
        return redirect('/');

    }
}
