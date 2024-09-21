<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::all();
        return view('dashboard.umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('dashboard.umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_umkm' => 'required|string',
            'contact' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'kecamatan' => 'required|string',
            'youtube' => 'required|string',
            'map_link' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
            $data['image'] = $imageName;
        }

        Umkm::create($data);

        return redirect()->route('umkm.index')->with('success', 'UMKM created successfully.');
    }

    public function update(Request $request, Umkm $umkm)
    {
        $request->validate([
            'name_umkm' => 'required|string',
            'contact' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'kecamatan' => 'required|string',
            'youtube' => 'required|string',
            'map_link' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($umkm->image) {
                unlink(public_path('storage/' . $umkm->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
            $data['image'] = $imageName;
        }

        $umkm->update($data);

        return redirect()->route('umkm.index')->with('success', 'UMKM updated successfully.');
    }

    public function edit(Umkm $umkm)
    {
        return view('dashboard.umkm.edit', compact('umkm'));
    }

    public function destroy(Umkm $umkm)
    {
        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'UMKM deleted successfully.');
    }

    public function show()
    {
        $umkms = Umkm::all();
        return view('pages.umkm', compact('umkms'));
    }


    public function showSingleUmkm($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('pages.umkm-open', compact('umkm'));
    }
}
