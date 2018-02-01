@extends('layout.home')

@section('content')

<h1>holiwiiii</h1>
<br>
<br>

@foreach($catalogos as $cat)
    <span>holi</span>
    <br>
    <span>{{ $cat->id }}</span>
    <br>
    <span>{{ $cat->nombreproducto }}</span>
    <br>
    <span>{{ $cat->precio }}</span>
@endforeach

@endsection