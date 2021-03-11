@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-event-container">
   @if(count($events) > 0)
   <tabla class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Participantes</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>    
        @foreach($events as $event)
            <tr>
                <th scope="row">{{ $loop->index + 1}}</th>
                <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
            </tr>
        @endforeach
    </tbody>
   </tabla>
   @else
   <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
   @endif
</div>

@endsection