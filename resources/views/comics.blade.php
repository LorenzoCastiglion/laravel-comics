@extends('layouts.app')


@section('jumbo')

<div class="jumbotron">
   <img src={{Vite::asset('resources/img/jumbotron.jpg') }} alt="">
</div>

@endsection


@section('section-1')
   <ul>
    @foreach($comics as $comic)
    <li>{{$comic['title']}}</li>
    <img src="{{$comic['thumb']}}" alt="">
        
    @endforeach
   </ul>
@endsection