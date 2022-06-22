@extends('restrict.layout')

@section('content')
</div>
<table>
     <thead>
          <tr>
             <tr>
                 <th>Nome</th>
                 <th>Título</th>
                 <th>Mensagem</th>
                 <th>Tópicos</th>
                 <th>Editar</th>
                 <th>Remover</th>
          </tr>
</thead>
<tbody> 
    @foreach(@mensagem as $mensagem)
    <tr>
        <td>{{$mensagem->user->name}}</td>
        <td>{{$mensagem->titulo}}</td>
        <td>{{$mensagem->mensagem}}</td>
        <td>
            @if(mensagem->topicos)
            @foreach($mensagem->topicos as $topico)
            <div{{$topico->topico}}</div>
            @endforeach
            @endif
        </td>
        <td>
            <a href="{{route('mensagem.edit' , @mensagem->id)}}" class="button">
                
        </td>
    </tr>