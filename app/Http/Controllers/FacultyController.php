<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\University;

class FacultyController extends Controller
{
    public function index()
    {
        $faculty = Faculty::all();
        $universities = university ::all();
        return view('faculty.index', compact('faculty','universities'));
    }

    public function create()
    {
        $universities = university ::all();
        return view('faculty.create', compact('universities'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'university_id' => 'required|exists:university,id'
        ]);

        $faculty = Faculty::create($validatedData);

        return redirect()->route('faculty.index')->with('success', 'Faculty created successfully.');
    }

    public function show(Faculty $faculty)
    {
        return view('faculty.show', compact('faculty'));
    }

    public function edit(Faculty $faculty)
    {
        $universities = university ::all();
        return view('faculty.edit', compact('faculty','universities'));
    }

    public function update(Request $request, Faculty $faculty)
    {
        $universities = university ::all();
        $validatedData = $request->validate([
            'nom' => 'required',
            'university_id' => 'required|exists:university,id'
        ]);

        $faculty->update($validatedData);

        return redirect()->route('faculty.index', compact('universities'))->with('success', 'Faculty updated successfully.');
    }

    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect()->route('faculty.index')->with('success', 'Faculty deleted successfully.');
    }
}
