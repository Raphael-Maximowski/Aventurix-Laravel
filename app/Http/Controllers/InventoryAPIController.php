<?php

namespace App\Http\Controllers;

use App\Models\Explorador;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class InventoryAPIController extends Controller
{
    public function show($id)
    {
        $explorer = Explorador::find($id); 
        if ($explorer == null)
        {
            return response()->json(['Explorer Not Found, Try Another ID']); 
        }
        else if ($explorer != null) 
        {
            $inventory = $explorer -> item;
            if (sizeof($inventory) == 0)
            {
                return response()->json(['Inventario Vazio! Insira alguns Items']);      
            }
            return response()->json(['inventory' => $inventory]);
        }

    }


    public function create($id)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'price' => ['required'],
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
                $item = Item::create([
                    'name' => request('name'),
                    'descricao' => 'default',
                    'price' => request('price'),
                    'explorador_id' => $explorer->id
                ]);
            
                return response()->json(['item' => $item]);
            }

            else {
                return response()->json('Você não pode Alterar Informações de Exploradores Não Vinculados ao seu ID');
            }

        }
    }

    public function relatorio($id)
    {
        $explorer = Explorador::all();
        $explorador = Explorador::Find($id);
        $itens = Item::all();
        $valores_totais = []; // Ok
        $media_item = []; // Ok
        foreach($explorer as $explorador)
        {
            $total = 0;
            foreach($itens as $item)
            {
                if ($item->explorador_id == $explorador->id)
                {
                    $total = $total + $item->price;
                }
                
            }
            array_push($valores_totais, $total);
        }

        foreach ($explorer as $index => $explorador) {
            if (count($explorador->item) != 0) {
                $media_item[$index] = $valores_totais[$index] / count($explorador->item);
            } else {
                $media_item[$index] = 0;
            }
        }

        $retorno = [
            "ID: " . $id,
            "Valor total Inventário: " . $valores_totais[$id-1],
            "Valor Total Por Item: " . $media_item[$id-1]
        ];
        
        return response()->json([$retorno]);
    }

}
