@extends('master')
@section('title','Liste des Clients')
@section('content')

<h1>Liste des clients</h1>
<ul>
    @foreach($clients as $client)
        <li>
            <a href="{{route('clients.show',$client->id)}}">{{$client->user->firstName}} {{$client->user->lastName}}</a>
        </li>
    @endforeach
</ul>

@stop