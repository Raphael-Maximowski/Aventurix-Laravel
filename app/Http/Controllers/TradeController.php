<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explorador;
use App\Models\Item;

class TradeController extends Controller
{
    public function index($id)
    {
        $explorer1 = Explorador::findOrFail($id);
        $all = Explorador::with('Item')->latest()->simplePaginate(5);
        return view('/explorer/extra_features/trade/users', ['explorer' => $explorer1, 'all' => $all]);
    }

    public function show($id, $id2)
    {
        $trader1 = Explorador::findOrFail($id);
        $trader2 = Explorador::findOrFail($id2);
        return view ('/explorer/extra_features/trade/trade', [
            'trader1' => $trader1, 'trader2' => $trader2
        ]);
    }

    public function edit($id, $id2)
    {
        $person1 = Explorador::findOrFail($id);
        $person2 = Explorador::findOrFail($id2);
    
        $produto1 = Item::findOrFail(request('item1'));
        $produto2 = Item::findOrFail(request('item2'));

        $aux = [
            'name' => $produto1->name,
            'descricao' => 'default',
            'price' => $produto1->price
        ];

        request()->validate([
            'id' => ['required', 'min:1']
        ]);
    
        if ($produto1->price == $produto2->price)
        {
            $produto1->update([
                'id' => request('item1'),
                'name' => $produto2->name,
                'descricao' => 'default',
                'price' => $produto2->price
            ]);
            $produto2->update([
                'id' => request('item2') ,
                'name' => $aux['name'],
                'descricao' => 'deafault',
                'price' => $aux['price']
            ]);
        }
        
       
        return redirect('/explorers/' . $person1->id . '/inventory/partner/' . $person2->id);    
    }
}
