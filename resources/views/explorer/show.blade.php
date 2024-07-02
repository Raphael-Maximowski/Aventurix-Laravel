<x-header_info>
    <x-slot:heading>
        {{$explorer->first_name}} {{$explorer->last_name}}
    </x-slot:heading>
</x-header_info>
<div class="main">
    <strong>Age:</strong> {{$explorer -> age}} <br>
    <strong>Actual Location:</strong> {{$explorer -> city}}, {{$explorer -> country}} <br>
    <strong>Coordinates </strong>
        <br>Latitude: {{$explorer -> latitude}} 
        <br>Longitude: {{$explorer -> longitude}} <br>
</div>
<div class="button" style="display:flex">
          <div class="mt-6 ml-30 flex items-center justify-start gap-x-6">
            <a href="/explorers/{{$explorer->id}}/edit"><button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit Location</button></a>
          </div>
          
          <a href="/explorers/{{$explorer->id}}/inventory"><button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="margin-top:24px; margin-left:10px">View Inventory</button></a>
          <hr style="margin-top: 30px">
      </div>
</div>
<div class="main">
    <div class="loc">
        <div style="display:flex">
            <div style="width:20%">
                <h2>Last Locations</h2>

            </div>
            <div style="width:80%; text-align:right">
            <a href="/explorers/{{$explorer->id}}/history"><button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">New History</button></a>
            </div>
        </div>
        <ul>
            @foreach ($explorer->location as $loc)
            <li><span class="title1">City:</span> {{$loc->city}} <span class="title1">Country:</span> {{$loc->country}}  <span class="title1">Latitude:</span> {{$loc->latitude}} <span class="title1">Longitude:</span> {{$loc->longitude}} <span class="title1">Date:</span> {{$loc->date}}</li>
            @endforeach
        </ul>
        <div>
    </div>
    <hr style="margin: 30px 0px;">

  
<style>

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
    li {
        list-style-type: none;
        padding: 10px 20px;
        border: 1px solid grey;
        margin: 25px 0px;
        border-radius: 10px;

    }
     .main {
        margin: 0px 160px;
        font-size: 18px;
    }

    li {
        list-style-type: none;
        margin-bottom: 10px;
    }

    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    .button {
        margin: 0px 160px;
    }

    strong{
        font-size: 19px;
    }
</style>