<x-header_info>
    <x-slot:heading>Choose Your Partner</x-slot:heading>
</x-header_info>
<div class="main">
    <div style="width: 80vw; padding: 10px 15px; background-color:#1F2937; border-radius:10px; color:white">
        <h1>First Trader: {{$explorer->first_name}} {{$explorer->last_name}}</h1>
    </div>
    <h1 style="color:#1F2937; font-size:18px; margin-top: 20px; ; font-weight:bold">Who is the Second: </h1>

    <div>
        @foreach ($all as $explorador)
        <a href="/explorers/{{$explorer->id}}/inventory/partner/{{$explorador->id}}">
            <li>
                    <strong>
                        <h2>{{$explorador->first_name}} {{$explorador->last_name}}</h>
                    </strong> <br>
                    <i>
                        <p>{{$explorador->latitude}} {{$explorador->longitude}}
                        </p>
                    </i>
                </a>
            </li>
        </a>
        @endforeach
    </div>]
    {{$all->links()}}
</div>
<style>

* {
        font-family: Arial, Helvetica, sans-serif;
    }
    .main {
        margin: 0px 160px;
    }

    li {
        list-style-type: none;
        padding: 10px 20px;
        border: 1px solid grey;
        margin: 25px 0px;
        width: 80vw;
        text-align: left;
    }


    .main {
        margin: 0px 160px;
        font-family: Arial, Helvetica, sans-serif;
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
    }

    .dec {
        padding: 5px 10px;
        background-color: lightgray;
        border-radius: 10px;
    }


    .hidden{
        display: none;
    }
</style>