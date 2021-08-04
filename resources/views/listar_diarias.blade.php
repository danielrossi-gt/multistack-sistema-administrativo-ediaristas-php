@extends('layout')

@section('titulo-pagina')
  Listar Diárias
@endsection

@section('conteudo-principal')

  <h1>Lista de Diárias</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome Cliente</th>
        <th scope="col">Nome Diarista</th>
        <th scope="col">Atendimento</th>
        <th scope="col">Valor</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach($diarias as $diaria)
        <tr>
          <th scope="row">{{ $diaria->id }}</th>
          <td>{{ $diaria->nome_cliente }}</td>
          <td>{{ $diaria->nome_diarista }}</td>
          <td>{{ (new \DateTime($diaria->atendimento))->format('d/m/Y H:i') }}</td>
          <td> R$ {{ number_format($diaria->valor, 2, ',', '.') }}</td>
          <td><a href=" {{ route('diarias.show', $diaria) }}" class="btn btn-success">Detalhes</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection