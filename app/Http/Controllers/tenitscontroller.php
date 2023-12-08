<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenits;





class TenitsController extends Controller
{
    public function index(){
        $tenits = tenits::all();
        return view('tenits.index', compact('tenits'));
    }
    public function update(){
        return view('tenits.update');
    }
    public function delete(){
        return view('tenits.delete');
    }
    public function create(){

        $tenits = tenits::all();
       


        return view('tenits.create', compact('tenits'));
    }
    public function terminate(){
        return view('tenits.terminate');
    }
    public function store(Request $request){
        //dd($request);
        $validated = $request ->validate(['nombre' => 'required',
        'nombre'=> 'required',
        'marca'=>'required',
        'precio'=> 'required',
        'genero'=> 'required',
        
    
        ],[
            'nombre.required'=>'Se Requiere este campo obligatoriamente',
        ]);

        $tenits = tenits::create([
            'nombre'=> $validated['nombre'],
            'marca'=> $validated['marca'],
            'precio'=> $validated['precio'],
            'genero'=> $validated['genero']
           
            
            
          
            
    
        ]);
        
        if($tenits) {
            return redirect(route('tenits.index'));
        }
        return redirect(route('tenits.create'));
    }
  
}