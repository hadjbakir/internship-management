<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dep;
use App\Models\Faculty;


class DepController extends Controller

{
    public function index()
    {
        $faculties = Faculty::all();
        $dep = Dep::all();

        return view('dep.index', compact('dep','faculties'));
    }

    public function create()
    {
        $faculties = Faculty ::all();
        return view('dep.create', compact('faculties'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'faculty_id' => 'required|exists:faculty,id'
        ]);

        $dep = Dep::create($validatedData);

        return redirect()->route('dep.index')->with('success', 'Faculty created successfully.');
    }

    public function show(Dep $dep)
    {
        return view('dep.show', compact('dep'));
    }

    public function edit(Dep $dep)
    {
        $faculties = faculty ::all();

        return view('dep.edit', compact('dep','faculties'));
    }

    public function update(Request $request, Dep $dep)
    {
        $faculties = Faculty ::all();
        $validatedData = $request->validate([
            'name' => 'required',
            'faculty_id' => 'required|exists:faculty,id'
        ]);

        $dep->update($validatedData);

        return redirect()->route('dep.index', compact('dep'))
        ->with('success', 'Faculty updated successfully.');
    }

    public function destroy(Dep $dep)
    {
        $dep->delete();

        return redirect()->route('dep.index')->with('success', 'departement deleted successfully.');
    }
}


?>
