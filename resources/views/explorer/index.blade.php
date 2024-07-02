<x-header>
    <x-slot:heading>
        Exploradores
    </x-slot:heading>
</x-header>
<div class="main">
    <a href="/explorers/create" class="button">Register Explorer</a>
    <div class="card">
        @foreach ($explorers as $explorer)
        <li>
            <a  href="/explorers/{{$explorer->id}}">
                <strong style="color:#1F2937">
                    <h2>{{$explorer->first_name}} {{$explorer->last_name}}</h>
                </strong> <br> 
                <i style="font-size:14px ">
                    <p>Latitude: {{$explorer->latitude}} Longitude{{$explorer->longitude}}

                    </p>
                </i>
            </a>
        </li>
        @endforeach
    </div>

    {{$explorers->links()}}
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
        border-radius: 20px;
    }

    .button {
        padding: 10px 20px;
        border-radius: 10px;
        background-color: #1F2937;
        color: white;
    }

    main {
        margin-top: 10px;
    }
</style>