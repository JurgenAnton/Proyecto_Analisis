<title>Lista de itinerarios</title>
<h1>Itinerarios</h1>
<ul>

@foreach($listaDeItinerarios as $item)
    {{$item}}

@endforeach

</ul>

{{$listaDeItinerarios->links()}}



