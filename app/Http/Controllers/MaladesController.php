<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Malade;

class MaladesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malades = Malade::latest()->paginate(5);
        
        return view('malades.index', compact('malades'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('malades.create');
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
            'Nom' => 'required',
            'prenom' => 'required',
            'Adresse' => 'required',
            'numTelephone' => 'required',
            'diagnostics' => 'required'
           
        ]);

        Malade::create($request->all());

        return redirect()->route('malades.index')
            ->with('success', 'Malade creé avec sucées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Malade  $malade
     * @return \Illuminate\Http\Response
     */
    public function show(Malade $malade)
    {
        return view('malades.show', compact('malade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Malade  $malade
     * @return \Illuminate\Http\Response
     */
    public function edit(Malade $malade)
    {
        
        return view('malades.edit', compact('malade'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Malade  $malade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Malade $malade)
    {
        $request->validate([
            'Nom' => 'required',
            'prenom' => 'required',
            'Adresse' => 'required',
            'NumTelephone' => 'required',
            'diagnostics' => 'required'
        ]);
        $malade->update($request->all());

        return redirect()->route('malades.index')
            ->with('success', 'Malade modifié avec sucées.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Malade  $malade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Malade $malade)
    {
        $malade->delete();

        return redirect()->route('malades.index')
            ->with('success', 'Malade suprimé avec sucées.');
    }

}
