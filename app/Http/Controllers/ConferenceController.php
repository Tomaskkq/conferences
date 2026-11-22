<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('conferences.index', ['conferences' => $conferences]);
    }

    public function show(Conference $conference)
    {
        return view('conferences.show', ['conference' => $conference]);
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        Conference::create($validated);

        return redirect()->route('conferences.index');
    }

    public function edit(Conference $conference)
    {
        return view('conferences.edit', ['conference' => $conference]);
    }

    public function update(Request $request, Conference $conference)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        $conference->update($validated);

        return redirect()->route('conferences.index');
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()->route('conferences.index');
    }
}
