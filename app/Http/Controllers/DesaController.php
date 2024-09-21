<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index()
    {
        $desas = Desa::all();
        return view('dashboard.desa.index', compact('desas'));
    }

    public function create()
    {
        return view('dashboard.desa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_desa' => 'required|string',
            'description_desa' => 'required',
            'total_resident_desa' => 'required|string',
            'kecamatan_desa' => 'required|string',
            'map_link_desa' => 'required|string',
        ]);

        Desa::create($request->all());

        return redirect()->route('desa.index')->with('success', 'Desa created successfully.');
    }

    public function show(Desa $desa)
    {
        return view('dashboard.desa.show', compact('desa'));
    }

    public function edit(Desa $desa)
    {
        return view('dashboard.desa.edit', compact('desa'));
    }

    public function update(Request $request, Desa $desa)
    {
        $request->validate([
            'name_desa' => 'required|string',
            'description_desa' => 'required',
            'total_resident_desa' => 'required|string',
            'kecamatan_desa' => 'required|string',
            'map_link_desa' => 'required|string',
        ]);

        $desa->update($request->all());

        return redirect()->route('desa.index')->with('success', 'Desa updated successfully.');
    }

    public function destroy(Desa $desa)
    {
        $desa->delete();

        return redirect()->route('desa.index')->with('success', 'Desa deleted successfully.');
    }
}
