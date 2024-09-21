<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potensi;

class PotensiController extends Controller
{

    public function index()
    {
        $potensi = Potensi::all();
        $categories = ['peternakan', 'pertanian', 'perikanan', 'perkebunan', 'pariwisata'];
        return view('dashboard.potensi.index', compact('potensi', 'categories'));
    }

    public function create()
    {
        $categories = ['peternakan', 'pertanian', 'perikanan', 'perkebunan', 'pariwisata'];
        return view('dashboard.potensi.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'potensi' => 'required|string|max:255',
            'category_potensi' => 'required|string|max:255',
            'description_potensi' => 'required',
            'address_potensi' => 'required|string|max:255',
            'kecamatan_potensi' => 'required|string|max:255',
            'youtube_potensi' => 'required|string|max:255',
            'map_link_potensi' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rule for the image
        ]);

        $data = $request->all();

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storagePotensi'), $imageName);
            $data['image_path'] = 'storagePotensi/' . $imageName;
        }


        Potensi::create($data);

        return redirect()->route('potensi.index')->with('success', 'Potensi created successfully.');
    }

    public function edit(Potensi $potensi)
    {
        return view('dashboard.potensi.edit', compact('potensi'));
    }

    public function update(Request $request, Potensi $potensi)
    {
        $request->validate([
            'potensi' => 'required|string|max:255',
            'category_potensi' => 'required|string|max:255',
            'description_potensi' => 'required',
            'address_potensi' => 'required|string|max:255',
            'kecamatan_potensi' => 'required|string|max:255',
            'youtube_potensi' => 'required|string|max:255',
            'map_link_potensi' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rule for the image
        ]);

        $data = $request->all();

        if ($request->hasFile('image_path')) {
            // Delete old image if it exists
            if ($potensi->image_path && file_exists(public_path($potensi->image_path))) {
                unlink(public_path($potensi->image_path));
            }

            $image = $request->file('image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storagePotensi'), $imageName);
            $data['image_path'] = 'storagePotensi/' . $imageName;
        }

        $potensi->update($data);

        return redirect()->route('potensi.index')->with('success', 'Potensi updated successfully.');
    }

    public function destroy(Potensi $potensi)
    {
        $potensi->delete();

        return redirect()->route('potensi.index')->with('success', 'Potensi deleted successfully.');
    }

    public function filter($category)
    {
        $potensis = Potensi::where('category_potensi', $category)->get();
        return view('pages.jenis-investasi', compact('potensis', 'category'));
    }

    public function show($id)
    {
        $potensi = Potensi::findOrFail($id);  // This will find the Potensi by ID or throw a 404 if not found
        return view('pages.jenis-investasi-open', compact('potensi'));
    }
}
