<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::all();
        return view('dashboard.kecamatan.index', compact('kecamatans'));
    }

    public function create()
    {
        return view('dashboard.kecamatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_kecamatan' => 'required|string|max:255',
            'description_kecamatan' => 'required|string',
            'map_link_desa' => 'required|string|max:255',
        ]);

        Kecamatan::create($request->all());

        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan created successfully.');
    }

    public function show(Kecamatan $kecamatan)
    {
        return view('dashboard.kecamatan.show', compact('kecamatan'));
    }

    public function edit(Kecamatan $kecamatan)
    {
        return view('dashboard.kecamatan.edit', compact('kecamatan'));
    }

    public function update(Request $request, Kecamatan $kecamatan)
    {
        $request->validate([
            'name_kecamatan' => 'required|string|max:255',
            'description_kecamatan' => 'required|string',
            'map_link_desa' => 'required|string|max:255',
        ]);

        $kecamatan->update($request->all());

        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan updated successfully.');
    }

    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();
        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan deleted successfully.');
    }
}
