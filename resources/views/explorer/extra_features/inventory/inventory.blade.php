<x-header_info>
    <x-slot:heading>Inventory {{$explorer->first_name}} {{$explorer->last_name}}</x-slot::heading>
</x-header_info>
    <div class="inventory">
        <div style="display:flex; margin-top:30px">
                <div style="width:20%; display:flex">
                    <div>
                        <h2>Inventory</h2>
                    </div>
                    <div style="margin-left: 20px;">
                    <a href="/explorers/{{$explorer->id}}/inventory/partner" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Trade</a>  
                    </div>
                </div>
                <div style="width:80%; text-align:right">
                    <a href="/explorers/{{$explorer->id}}/inventory/item" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">New Item</a>
                </div>
            </div>
        <div style="width: 80vw;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center; margin-bottom: 30px;">
        @foreach ($explorer->item as $itens)
        <div class="card">
            <strong>{{ $itens->name}}</strong> <br> <span class="price">R${{ $itens->price}}</span> <br>
            <div class="dec">Description of the Item</div>
        </div>
        @endforeach
        </div>
        </div>
    </div>

<style>
    .inventory {
        margin: 0px 160px;
    }

    
    .price {
        color: green;
        font-style: italic;
        
    }
    .card{
        padding: 10px;
        border: 1px solid grey;
        text-align: center;
        width: 15vw;
        margin: 10px 15px 0px 0px;
    }

    .dec {
        padding: 5px 10px;
        background-color: lightgray;
        border-radius: 10px;
    }
    .title1{
        color: #6366F1;
        font-size: 16px;
        font-weight: bold;
    }
    .loc {
        margin-top: 30px;
        font-size: 15px;
    }
    h2{
        font-weight: bold;
        color:#111827;
        margin-bottom: 10px;
    }

    * {
        font-family: Arial, Helvetica, sans-serif;
    }

</style>