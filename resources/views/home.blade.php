@extends("layouts.public")

@section("content")

<ul>
    @foreach ($trains as $train  )
    <li> {{$train->Azienda}}</li>
    @endforeach

</ul>
    
@endsection