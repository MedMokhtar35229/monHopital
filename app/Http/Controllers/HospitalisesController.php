<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;
use App\Models\Hospitalise;
use App\Models\Malade;
class HospitalisesController extends Controller
{
   
       /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $hospitalises = Hospitalise::latest()->paginate(5);
            
            return view('hospitalises.index', compact('hospitalises'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $malades = Malade::all();
            $salles = Salle::all();
            return view('hospitalises.create',  compact('malades'), compact('salles'));
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $request->validate([
                'Numero' => 'required',
                'id' => 'required',
                'numLit' => 'required'
               
            ]);
    
            Hospitalise::create($request->all());
    
            return redirect()->route('hospitalises.index')
                ->with('success', 'Malade hospitalisé avec sucées.');
        }
    
       
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Hospitalise  $hospitalise
         * @return \Illuminate\Http\Response
         */
        public function edit(Hospitalise  $hospitalise)
        {
            
            $malades = Malade::all();
            $salles = Salle::all();
            
            return view('hospitalises.edit' , compact('hospitalise','malades'), compact('salles'));
        }
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Hospitalise  $hospitalise
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Hospitalise $hospitalise)
        {
            $request->validate([
                'Numero' => 'required',
                'id' => 'required',
                'numLit' => 'required'
            ]);
            $hospitalise->update($request->all());
    
            return redirect()->route('hospitalises.index')
                ->with('success', 'Hospitalise modifié avec sucées.');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Hospitalise  $hospitalise
         * @return \Illuminate\Http\Response
         */
        public function destroy(Hospitalise $hospitalise)
        {
            $hospitalise->delete();
    
            return redirect()->route('hospitalises.index')
                ->with('success', 'Hospitalise suprimé avec sucées.');
        }
    
    
    
}
