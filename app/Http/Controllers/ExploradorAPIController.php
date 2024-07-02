<?php

namespace App\Http\Controllers;

use App\Models\Explorador;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ExploradorAPIController extends Controller
{
    public function index()
    {
        $explorers = Explorador::all();
        return response()->json(['explorer' => $explorers]);
    }

    public function show($id)
    {
        $explorer = Explorador::find($id); 
        if ($explorer == null)
        {
            return response()->json(['Explorer Not Found, Try Another ID']); 
        }
        else if ($explorer != null) 
        {
            return response()->json(['explorer' => $explorer]); 
        }
        
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        if ($user->explorador_id == null)
        {
            $validated = $request->validate([
                'first_name' => ['required', 'min:5'],
                'last_name' => ['required', 'min:5'],
                'age' => ['required', 'min:2'],
                'city' => ['required', 'min:3'],
                'country' => ['required', 'min:3'],
                'latitude' => ['required', 'min:8'],
                'longitude' => ['required', 'min:8'],
            ]);

            $explorer = Explorador::create($validated);
            $User = User::findOrFail($explorer->id);
            $User->explorador_id = $explorer->id;
            $User->save();
            return response()->json(['explorer' => $explorer]);
        }

        else {
            return response()->json(['Sua Conta ja Possui um Explorador Atrelado a Ela!']);
        }

    }
}
