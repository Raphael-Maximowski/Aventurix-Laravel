<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explorador;
use App\Models\Location;

class LocationController extends Controller
{
    public function index($id){
        $explorer = Explorador::findOrFail($id);
        return view('.explorer.edit', ['explorer' => $explorer]);
    }

    public function edit($id)
    {
        request()->validate([
            'city' => ['required', 'min:3'],
            'country' => ['required', 'min:3'],
            'latitude' => ['required', 'min:8'],
            'longitude' => ['required', 'min:8'],
        ]);
        $explorer = Explorador::findOrFail($id);
        $explorer->update([
            'city' => request('city'),
            'country' => request('country'),
            'latitude' => request('latitude'),
            'longitude' => request('longitude')
        ]);
        return redirect('/explorers/' . $explorer->id);
    }

    public function createview($id)
    {
        $explorer = Explorador::findOrFail($id);
        return view('explorer.extra_features.location.history', [
            'explorer' => $explorer
        ]);
    }

    public function create($id)
    {
        request()->validate([
            'city' => ['required', 'min:3'],
            'country' => ['required', 'min:3'],
            'latitude' => ['required', 'min:8'],
            'longitude' => ['required', 'min:8'],
            'date' => ['required', 'min:8']
        ]);

        $explorer = Explorador::findOrFail($id);
        $loc = Location::create([
            'city' => request('city'),
            'country' => request('country'),
            'latitude' => request('latitude'),
            'longitude' => request('longitude'),
            'date' => request('date'),
            'explorador_id' => $explorer->id
        ]);
        return redirect('/explorers/' . $explorer->id);
    }
}
