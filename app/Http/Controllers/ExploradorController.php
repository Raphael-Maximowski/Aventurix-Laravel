<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Explorador;

class ExploradorController extends Controller
{
    public function index()
    {
        $explorers = Explorador::with('Item')->latest()->simplePaginate(5);
        return view ('.explorer.index', ['explorers' => $explorers]);
    }

    public function createview()
    {
        return view ('.explorer.create');
    }

    public function show($id)
    {
        $explorer = Explorador::findOrFail($id); 
        return view('.explorer.show', ['explorer' => $explorer]);  
    }

    public function create()
    {
        request()->validate([
            'first_name' => ['required', 'min:5'],
            'last_name' => ['required', 'min:5'],
            'age' => ['required', 'min:2'],
            'city' => ['required', 'min:3'],
            'country' => ['required', 'min:3'],
            'latitude' => ['required', 'min:8'],
            'longitude' => ['required', 'min:8'],
        ]);
        $explorer = Explorador::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'age' => request('age'),
            'city' => request('city'),
            'country' => request('country'),
            'latitude' => request('latitude'),
            'longitude' => request('longitude'),
        ]);
        return redirect('/explorers');

    }
}
