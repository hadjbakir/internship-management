<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demande;
use App\Models\fichenotation;

class FichenotationController extends Controller
{
    public function index()
    {
        $fichenotation = Fichenotation::all();

        return view('fichenotation.index', compact('fichenotation'));
    }

    public function create()
    {
        $demande = Demande ::all();
        return view('fichenotation.create', compact('demande'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'discipline' => 'required',
            'demande_id' => 'required|exists:demande,id',
            'aptitude' => 'required',
            'initiative' => 'required',
            'imagination' => 'required',
            'conaissance' => 'required',
            'note' => 'required',
            'appreciation' => 'required',
            'envoi' => 'required',
        ]);

        $fichenotation = Fichenotation::create($validatedData);

        return redirect()->route('fichenotation.index')->with('success', 'fichenotation created successfully.');
    }

    public function show(Fichenotation $fichenotation)
    {
        return view('fichenotation.show', compact('fichenotation'));
    }

    public function edit(Fichenotation $fichenotation)
    {
        $demande = Demande ::all();
        return view('fichenotation.edit', compact('fichenotation','demande'));
    }

    public function update(Request $request, Fichenotation $fichenotation)
    {
        $demande = Demande ::all();
        $validatedData = $request->validate([
            'discipline' => 'required',
            'demande_id' => 'required|exists:demande,id',
            'aptitude' => 'required',
            'initiative' => 'required',
            'imagination' => 'required',
            'conaissance' => 'required',
            'note' => 'required',
            'appreciation' => 'required',
            'envoi' => 'required',
        ]);

        $fichenotation->update($validatedData);

        return redirect()->route('fichenotation.index', compact('demande'))->with('success', 'fichenotation updated successfully.');
    }

    public function destroy(Fichenotation $fichenotation)
    {
        $fichenotation ->delete();

        return redirect()->route('fichenotation.index')->with('success', 'fiche de notation deleted successfully.');
    }
}


?>
