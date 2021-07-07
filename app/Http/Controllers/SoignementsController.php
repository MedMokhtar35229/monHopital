<?php

namespace App\Http\Controllers;
use App\Models\Soigne;
use App\Models\Malade;
use App\Models\Docteur;
use Illuminate\Http\Request;

class SoignementsController extends Controller
{
 
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soignes = Soigne::latest()->paginate(5);
        
        return view('soignes.index', compact('soignes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docteurs = Docteur::all();
        $malades = Malade::all();
        return view('soignes.create',compact('malades','docteurs'));
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
            'id' => 'required',
            'id_Docteurs' => 'required'
           
        ]);

        Soigne::create($request->all());

        return redirect()->route('soignes.index')
            ->with('success', 'Soigne created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soigne  $soigne
     * @return \Illuminate\Http\Response
     */
    public function show(Soigne $soigne)
    {
        return view('soignes.show', compact('soigne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soigne  $soigne
     * @return \Illuminate\Http\Response
     */
    public function edit(Soigne $soigne)
    {
        $docteurs = Docteur::all();
        $malades = Malade::all();
        return view('soignes.edit', compact('soigne','malades','docteurs'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soigne  $soigne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soigne $soigne)
    {
        $request->validate([
            'id' => 'required',
            'id_Docteurs' => 'required',
            
        ]);
        $soigne->update($request->all());

        return redirect()->route('soignes.index')
            ->with('success', 'Soigne updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soigne  $soigne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soigne $soigne)
    {
        $soigne->delete();

        return redirect()->route('soignes.index')
            ->with('success', 'Soigne deleted successfully');
    }

}
