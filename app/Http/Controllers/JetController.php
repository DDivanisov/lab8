<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jet;

class JetController extends Controller
{
    public function index()
    {
        $jets = Jet::all();
        return view('jets.index', compact('jets'));
    }

    public function show($id)
    {
        $jet = Jet::findOrFail($id);
        return view('jets.show', compact('jet'));
    }
    public function create()
    {
        return view('jets.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'model' => 'required|string',
            'capacity' => 'required|integer|min:1',
            'hourly_rate' => 'required|numeric|min:0',
        ]);

        $jet = Jet::create($validated);
        return redirect()->rout('jets.index');
    }
    public function edit(Jet $jet)
    {
        return view('jets.edit', compact('jet'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'model' => 'required|string',
            'capacity' => 'required|integer|min:1',
            'hourly_rate' => 'required|numeric|min:0',
        ]);

        $jet = Jet::findOrFail($id);
        $jet->update($validated);
        return redirect()->rout('jets.index');
    }

    public function destroy($id)
    {
        $jet = Jet::findOrFail($id);
        $jet->delete();
        return redirect()->rout('jets.index')->with('success', 'Jet deleted successfully.');
    }
}
