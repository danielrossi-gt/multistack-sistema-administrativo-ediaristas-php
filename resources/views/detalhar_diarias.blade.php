@extends('layout')

@section('titulo-pagina')
  Detalhes da Diária
@endsection

@section('conteudo-principal')

<h1>Detalhes da Diária {{ $diaria->id }} </h1>

      <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Detalhes</h5>
          <p class="card-text">
            <strong>Nome Cliente: </strong> {{ $diaria->nome_cliente }}
          </p>
          <p class="card-text">
            <strong>Nome Cliente: </strong> {{ $diaria->nome_diarista }}
          </p>
          <p class="card-text">
            <strong>Nome Cliente: </strong> {{ (new \DateTime($diaria->atendimento))->format('d/m/Y H:i') }}
          </p>
          <p class="card-text">
            <strong>Nome Cliente: </strong> R$ {{ number_format($diaria->valor, 2, ',', '.') }}
          </p>
          <a href=" {{ route('index') }}" class="btn btn-primary">Voltar para Lista</a>
        </div>
      </div>      

@endsection