<x-header_info>
    <x-slot:heading>Relatório de Inventários</x-slot:heading>
</x-header_info>
<div class="main">
    <ul>
        @foreach ($explorer as $index => $explorador)
            <li class="card"><span class="mark">Nome:</span> <I>{{$explorador->first_name}} {{$explorador->last_name}}</I> <br><span class="mark">Total de Itens:</span> <i>{{sizeof($explorador->item)}}</i> <br> <span class="mark">Valor Total de Itens:</span> <i>R${{$total[$index]}}</i> <br><span class="mark">Média por Item:</span> <i>R${{$media[$index]}}</i></li>
        @endforeach
    </ul>
    <div style="margin-top:15px">{{$explorer->links()}}</div>
</div>

<style>

    .mark {
        color: #1F2937;
        font-weight: bolder;
        font-size:16px;
        margin-left: 10px
    }

    li {
        list-style-type: none;
        padding: 10px 20px;
        border: 1px solid grey;
        margin: 25px 0px;
        border-radius: 20px;
    }

    .main {
        margin: 0px 160px;
    }
        .card{
        padding: 10px;
        border: 1px solid grey;
        text-align: left;
        width: 80vw;
        margin: 10px 15px 0px 0px;
    }

</style>

