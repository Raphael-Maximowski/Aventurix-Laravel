<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explorador;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;

class LocationAPIController extends Controller
{

    public function index($id)
    {
        $explorer = Explorador::find($id);
        if ($explorer == null)
        {
            return response()->json(['Explorer Not Found, Try Another ID']); 
        }
        else if ($explorer != null) 
        {
            $localizacoes = $explorer->location;
            if (sizeof($localizacoes) == 0) 
            {
                return response()->json(['History Empty! Insert New Locations']);   
            }
            else if ($localizacoes != null)
            {
               return response()->json(['loc' => $localizacoes]);    
            }
                  
        }
       
    }

    public function edit($id)
    {
        request()->validate([
            'city' => ['required', 'min:3'],
            'country' => ['required', 'min:3'],
            'latitude' => ['required', 'min:8'],
            'longitude' => ['required', 'min:8'],
        ]);
        $explorer = Explorador::find($id);
        $user = Auth::user();

        if ($explorer == null)
        {
            return response()->json(['Explorer Not Found, Try Another ID']); 
        }
        else if ($explorer != null) 
        {
            if ($user->explorador_id == $id)
            {
                $explorer->update([
                    'city' => request('city'),
                    'country' => request('country'),
                    'latitude' => request('latitude'),
                    'longitude' => request('longitude')
                ]);
                $locations = [
                    $explorer->city,
                    $explorer->country,
                    $explorer->latitude,
                    $explorer->longitude
                ];
                return response()->json(['location' => $locations]);
            }
            
            else {
                return response()->json(['Você não pode Alterar Informações de um Explorador Não vinculado ao seu ID']);
            }

        }

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

        $explorer = Explorador::find($id);
        $user = Auth::user();
        if ($explorer == null)
        {
            return response()->json(['Explorer Not Found, Try Another ID']); 
        }
        else if ($explorer != null) 
        {
            if ($user->explorador_id == $id)
            {
                $localizacao = Location::create([
                    'city' => request('city'),
                    'country' => request('country'),
                    'latitude' => request('latitude'),
                    'longitude' => request('longitude'),
                    'date' => request('date'),
                    'explorador_id' => $explorer->id
                    ]);
                return response()->json(['Localizações' => $localizacao]); 
            }
            else {
                return response()->json(['Você não pode Alterar Informações de um Explorador não vinculado ao seu ID']);
            }
        }
    }
}
