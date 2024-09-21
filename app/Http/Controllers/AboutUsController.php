<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $item = AboutUs::first(); // Retrieve the first (or only) record
        return view('dashboard.about.index', compact('item'));
    }


    public function create()
    {
        return view('dashboard.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'about_lipsing' => 'required',
            'map_link' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);

        AboutUs::create($request->all());

        return redirect()->route('about.index');
    }

    public function edit($id)
    {
        $item = AboutUs::findOrFail($id);
        return view('dashboard.about.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'about_lipsing' => 'required',
            'map_link' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);

        $item = AboutUs::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('about.index');
    }


    public function destroy($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $aboutUs->delete();

        return redirect()->route('about.index');
    }

    public function show()
    {
        $item = AboutUs::first(); // Retrieve the first (or only) record
        return view('pages.about', compact('item'));
    }
}
