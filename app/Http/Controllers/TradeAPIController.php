<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explorador;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
class TradeAPIController extends Controller
{

    public function edit($id, $item1,  $id2, $item2)
    {
        $person1 = Explorador::find($id);
        $person2 = Explorador::find($id2);

        
        $produto1 = Item::find(request('item1'));
        $produto2 = Item::find(request('item2'));

        $user = Auth::user();

        if ($person1 == null || $person2 ==  null)
        {
            return response()->json(['Algum dos Exploradores Não Existem no Nosso Banco de Dados']);
        }
        else if ($person1 != null && $person2 != null)
        {
            if ($user->explorador_id == $id)
            {
                if ($id != $produto1->explorador_id || $id2 != $produto2->explorador_id)
                {
                    return response()->json(['Algum dos Exploradores Não Possui o Item Inserido!']);
                }
    
                else if ($id == $produto1->explorador_id && $id2 == $produto2->explorador_id)
                {
                    $aux = [
                        'name' => $produto1->name,
                        'descricao' => 'default',
                        'price' => $produto1->price
                    ];
            
                    if ($produto1->price == $produto2->price)
                    {
                        $produto1->update([
                            'id' => $item1,
                            'name' => $produto2->name,
                            'descricao' => 'default',
                            'price' => $produto2->price
                        ]);
                        $produto2->update([
                            'id' => $item2,
                            'name' => $aux['name'],
                            'descricao' => 'deafault',
                            'price' => $aux['price']
                        ]);
            
                        return response()->json(["Troca Realizada entre: ID: " . $id . " -> ID: " . $id2]) ;
                    }
            
                    else {
                        return response()->json(['Regra de Troca Violada, Valor de Itens Diferentes']);
                    }
                }
            }

            else {
                return response()->json(['Você precisa estar Logado no ID Primario para Realizar uma Troca']);
            }
 
        }

        
       
        
    }
}
