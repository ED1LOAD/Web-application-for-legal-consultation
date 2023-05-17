<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LawyerStoreRequest;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LawyerController extends Controller
{
    public function index()
    {
        $lawyers = Lawyer::all();
        return view('admin.lawyers.index', compact('lawyers'));
    }

    public function create(){
        return view('admin.lawyers.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('public/lawyers');

        Lawyer::create([
            'image' => $image,
            'name' => $request->name,
            'city' => $request->city,
            'description' => $request->description,
        ]);

        return to_route('admin.lawyers.index');
    }

    public function edit(Lawyer $lawyer)
    {
        return view('admin.lawyers.edit', compact('lawyer'));
    }

    public function update(Request $request, Lawyer $lawyer)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'description' => 'required',

        ]);
        $image = $lawyer->image;
        if($request->hasFile('image')){
            Storage::delete($lawyer->image);
            $image = $request->file('image')->store('public/lawyers');
        }

        $lawyer->update([
            'image' => $image,
            'name' => $request->name,
            'city' => $request->city,
            'description' => $request->description,
        ]);

        return to_route('admin.lawyers.index');
    }

    public function destroy(Lawyer $lawyer)
    {
        Storage::delete($lawyer->image);
        $lawyer->delete();

        return to_route('admin.lawyers.index');
    }

}
