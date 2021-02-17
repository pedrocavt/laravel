@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
        <h1>Algum titulo</h1>
        <img src="/img/banner.jpg" alt="">
        @if (10 < 5)
            <p>True</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "Matheus")
            <p>O nome é Matheus</p>
        @elseif($nome == "Pedro")
            <p>O nome é {{$nome}} e ele tem {{$idade}} anos, e trabalha com {{$profissao}}</p>
        @else
            <p>O nome não é Matheus</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p>O i é {{$i}}</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
        <p>{{$loop -> index}}: {{$nome}}</p>
        @endforeach

        @php
            $name = "Pedro";
            echo $name;
        @endphp
        
        {{-- Comentário em blade --}}
@endsection