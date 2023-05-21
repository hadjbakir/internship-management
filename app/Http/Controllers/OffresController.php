<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offres;
use App\Models\Maitrestage;

class OffresController extends Controller

{
    public function index()
    {
        $offres = Offres::all();

        return view('offres.index', compact('offres'));
    }

    public function indexetidiant()
    {
        $offres = Offres::all();

        return view('offres.indexetidiant', compact('offres'));
    }

    public function create()
    {
        $maitrestage = maitrestage ::all();
        return view('offres.create', compact('maitrestage'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'datedebut' => 'required',
            'maitrestages_id' => 'required|exists:maitrestages,id',
            'dure' => 'required',
            'nmbrpostes' => 'required',
            'poste' => 'required',
        ]);

        $offres = Offres::create($validatedData);

        return redirect()->route('offres.create')->with('succes_message', 'offre created successfully.');
    }

    public function show(Offres $offres)
    {
        return view('offres.show', compact('offres'));
    }

    public function edit(Offres $offre)
    {
        $maitrestage = maitrestage ::all();
        return view('offres.edit', compact('offre','maitrestage'));
    }

    // public function update(Request $request, Offres $offres)
    // {
    //     $maitrestage = maitrestage ::all();
    //     $validatedData = $request->validate([
    //         'datedebut' ,
    //         'maitrestage_id' => 'required|exists:maitrestage,id',
    //         'dure' ,
    //         'nmbrpostes' ,
    //         'poste' ,
    //     ]);

    //     $offres->update($validatedData);

    //     return redirect()->route('offres.index', compact('maitrestage'))->with('success', 'offres updated successfully.');
    // }


    public function updateoffres(Request $request)
        {
            // Get the input data from the request
            $data = $request->all();
            $maitrestage = maitrestage ::all();

            // Find the ChefD record by ID
            $offre = Offres::findOrFail($data['id']);
            // Update the record with the new data

            $offre->update([
                'datedebut' => $data['datedebut'],
                'dure' => $data['dure'],
                'maitrestages_id' => $data['maitrestages_id'],
                'nmbrpostes' => $data['nmbrpostes'],
                'poste' => $data['poste'],


            ]);

            return redirect()->route('offres.index')->
            with(compact('maitrestage', 'offre'))->
            with('succes_message', 'Offres updated successfully.');
        }

    public function destroy(Offres $offres)
    {
        $offres->delete();

        return redirect()->route('offres.index')->
        with('success', 'offres deleted successfully.');
    }
}


?>
