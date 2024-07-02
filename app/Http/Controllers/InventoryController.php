<?php

namespace App\Http\Controllers;

use App\Models\Explorador;
use App\Models\Item;

class InventoryController extends Controller
{
    public function show($id)
    {
        $explorer = Explorador::findOrFail($id); 
        return view ('/explorer/extra_features/inventory/inventory', [
            'explorer' => $explorer
        ]);    
    }

    public function createview($id)
    {
        $explorer = Explorador::findOrFail($id);
        return view ('/explorer/extra_features/inventory/item', ['explorer' => $explorer]);
    }

    public function create($id)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'price' => ['required'],
        ]);
        $explorer = Explorador::findOrFail($id);
        Item::create([
            'name' => request('name'),
            'descricao' => 'default',
            'price' => request('price'),
            'explorador_id' => $explorer->id
        ]);
    
        return redirect('/explorers/'.$explorer->id.'/inventory');
    }

    public function relatorio()
    {
        $explorer = Explorador::with('Item')->latest()->simplePaginate(4);
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
        
        

        return view ('/explorer/extra_features/inventory/relatorio', ['explorer' => $explorer, 'total' => $valores_totais, "media" => $media_item]);
    }
}
