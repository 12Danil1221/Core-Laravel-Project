<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_image' => 'required',
            'file' => 'required|image|max:2048',
            'description_image' => 'required',
        ]);

        $imagePath = $request->file('file')->store('images', 'public');

        Image::create([
            'title_image' => $request->title_image,
            'file_path' => $imagePath,
            'description_image' => $request->description_image,
        ]);

        return redirect()->route('fitnes-livewire');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}