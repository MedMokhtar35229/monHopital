<?php
namespace App\Http\Controllers;

use App\Models\Docteur;
use Illuminate\Http\Request;

class DocteursController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docteurs = Docteur::all();

        return view('docteurs.index', compact('docteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docteurs.create');
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
            'Prenom' => 'required',
            'Adresse' => 'required',
            'numTelephone' => 'required',
            'Specialite' => 'required'
        ]);

        Docteur::create($request->all());

        return redirect()->route('docteurs.index')
            ->with('success', 'Docteur creé avec sucées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function show(Docteur $docteur)
    {
        
        return view('docteurs.show', compact('docteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Docteur $docteur)
    {
        return view('docteurs.edit', compact('docteur'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docteur $docteur)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Adresse' => 'required',
            'numTelephone' => 'required',
            'Specialite' => 'required'
        ]);
        $docteur->update($request->all());

        return redirect()->route('docteurs.index')
            ->with('success', 'Docteur modifié avec sucées.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docteur $docteur)
    {
        $docteur->delete();

        return redirect()->route('docteurs.index')
            ->with('success', 'Docteur suprimé avec succeés');
    }
}
