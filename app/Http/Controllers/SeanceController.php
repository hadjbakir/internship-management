<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seance;
use App\Models\demande;

class SeanceController extends Controller
{
    public function index()
    {
        $seance = Seance::all();

        return view('seance.index', compact('seance'));
    }

    public function gg()
    {

        return view('seance.create');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'demande_id' => 'required|exists:demande,id',
            'date' => 'required',
            'hentre' => 'required',
            'hsorti' => 'required',
            'observation' => 'required'

        ]);

        $seance = Seance::create($validatedData);
        $seances = Seance::where('demande_id', $demande->id)->get();
        return redirect()->route('seance.create',compact('seances'))->with('success', 'seance created successfully.');
    }


    public function show(Demande $demande)
    {
        // Load the seances for the demande
        $seances = Seance::where('demande_id', $demande->id)->get();

        return view('demande.show', compact('seances'));
    }

    public function edit(Seance $seance)
    {
        $demande = Demande ::all();
        return view('seance.edit', compact('seance','demande'));
    }

    public function update(Request $request, Seance $seance)
    {
        $demande = Demande ::all();
        $validatedData = $request->validate([
            'id' => 'required',
            'demande_id' => 'required|exists:demande,id',
            'delai' => 'required',
            'date' => 'required',
            'hentre' => 'required',
            'hsorti' => 'required',
            'observation' => 'required',
        ]);

        $seance->update($validatedData);

        return redirect()->route('seance.index', compact('demande'))->with('success', 'seance updated successfully.');
    }

    public function destroy(Seance $seance)
    {
        $seance->delete();

        return redirect()->route('calender.add')->with('succes_message', 'seance deleted successfully.');
    }
}

?>
