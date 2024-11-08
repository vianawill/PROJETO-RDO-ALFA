@extends('adminlte::page')

@section('content')
<h1>Lista de RDOs</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Nome do Cliente</th>
            <th>Razão Social</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Criação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rdos as $rdo)
        <tr>
            <td>{{ $rdo->cliente_nome }}</td>
            <td>{{ $rdo->cliente_razao }}</td>
            <td>{{ $rdo->cliente_email }}</td>
            <td>{{ $rdo->cliente_telefone }}</td>
            <td>{{ $rdo->created_at->format('d/m/Y H:i') }}</td>
            <td>
                <form action="{{ route('rdos.destroy', $rdo->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este RDO?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection