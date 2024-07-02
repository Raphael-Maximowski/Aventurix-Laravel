<x-header_info>
    <x-slot:heading>Trade Between {{$trader1->first_name}} {{$trader1->last_name}} X {{$trader2->first_name}} {{$trader2->last_name}}</x-slot:heading>
</x-header_info>

<div class="main">
    <div class="inv1" style="background-color:#1F2937; padding:20px 60px 20px 20px; width:82vw; border-radius:20px; margin-bottom:30px">
        <h1 style="font-size:22px; color:white; font-weight:bold">{{$trader1->first_name}} {{$trader1->last_name}} Inventory</h1>
        <div>
        <div style="width: 80vw;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center; margin-bottom: 30px;">
        @foreach ($trader1->item as $itens)
        <div class="card">
            <strong style="color:#1F2937">{{ $itens->name}}  ID - {{$itens->id}}</strong> <br> <span class="price">R${{ $itens->price}}</span> <br>
            <div class="dec">Description of the Item</div>
        </div>
        @endforeach
        </div>
        </div>
    </div>


    <div class="inv2" style="background-color:lightgray; padding:20px 60px 20px 20px; width:82vw; border-radius:20px">
        <h1 style="font-size:22px; color: #1F2937; font-weight:bold">{{$trader2->first_name}} {{$trader2->last_name}} Inventory</h1>
        <div>
        <div style="width: 80vw;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center; margin-bottom: 30px;">
        @foreach ($trader2->item as $itens)
        <div class="card1">
            <strong style="color:white">{{ $itens->name}} ID - {{$itens->id}}</strong> <br> <span class="price">R${{ $itens->price}}</span> <br>
            <div class="dec1">Description of the Item</div>
        </div>
        @endforeach
        </div>
        </div>
    </div>

    <form method="post" action="/explorers/{{$trader1->id}}/inventory/partner/{{$trader2->id}}">
        @method('PATCH')
        @csrf
        <div style="margin: 30px 0px 60px 0px">
            <div style="margin-bottom:20px; font-size:22px; color:#1F2937">Trading System</div>
            <div style="display:flex; justify-content:space-between; font-size:18px; background-color:#1F2937; padding:15px 30px; border-radius:5px">
                <div class="sm:col-span-4">
                              <label  for="city" class="block text-sm font-medium leading-6 text-gray-900" style="color:white; font-size:16px">Insert the Item ID of {{$trader1->first_name}} {{$trader1->last_name}} Inventory</label>
                              <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                  <input style="background-color:white; border-radius:5px; border: 0px" type="number" name="item1" id="item1"  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Item ID">
                                </div>
                                @error('name')
                                <p class="warning">{{ $message }}</p>
                                @endError
                              </div>
                            </div>
                            <div style="background-color:lightgrey; margin: 20px 0px; border-radius:5px"><button style="color:#1F2937; font-weight:bolder; font-size:18px;
                            padding:5px 10px;" type="submit">Trade</button></div>
                            <div class="sm:col-span-4">
                                  <label for="country" class="block text-sm font-medium leading-6 text-gray-900" style="color:white; font-size:16px">Insert the Item ID of {{$trader2->first_name}} {{$trader2->last_name}} Inventory</label>
                                  <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                      <input style="background-color:white; border-radius:5px; border: 0px" type="number" name="item2" id="item2" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Item ID">
                                    </div>
                                    @error('item2')
                                    <p class="warning">{{ $message }}</p>
                                    @endError
                                  </div>
                                </div>
            </div>
        </div>
    </form>

</div>

<style>
    .main {
        margin: 0px 160px;
    }

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
        border-radius: 10px;
        background-color: lightgray;
    }

    .card1{
        padding: 10px;
        border: 1px solid white;
        background-color: #1F2937;
        text-align: center;
        width: 15vw;
        margin: 10px 15px 0px 0px;
        border-radius: 10px;
    }

    .dec {
        padding: 5px 10px;
        background-color: #1F2937;
        color: black;
        border-radius: 10px;
        background-color: lightgray;
    }

    .dec1 {
        padding: 5px 10px;
        background-color: #1F2937;
        color: white;
        border-radius: 10px;
    }
    .warning{
      margin-top: 10px;
      color: red;
      font-size:14px;
      font-style: italic;
    }
</style>