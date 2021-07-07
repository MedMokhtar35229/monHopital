<?php
namespace App\Http\Controllers;

use App\Models\Infirmier;
use App\Models\Service;
use Illuminate\Http\Request;

class InfirmiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infirmiers = Infirmier::latest()->paginate(5);
        
        return view('infirmiers.index', compact('infirmiers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('infirmiers.create',compact('services'));
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
            'Rotation' => 'required',
            'Salaire' => 'required',
            'Code' => 'required'
        ]);

        Infirmier::create($request->all());

        return redirect()->route('infirmiers.index')
            ->with('success', 'Infirmier creé avec sucées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function show(Infirmier $infirmier)
    {
        return view('infirmiers.show', compact('infirmier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function edit(Infirmier $infirmier)
    {
        $services = Service::all();
        return view('infirmiers.edit', compact('infirmier'),compact('services'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infirmier $infirmier)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Adresse' => 'required',
            'numTelephone' => 'required',
            'Rotation' => 'required',
            'Salaire' => 'required',
            'Code' => 'required'
        ]);
        $infirmier->update($request->all());

        return redirect()->route('infirmiers.index')
            ->with('success', 'Infirmier modifié avec sucées.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infirmier $infirmier)
    {
        $infirmier->delete();

        return redirect()->route('infirmiers.index')
            ->with('success', 'Infirmier  suprimé avec succeés');
    }
}
