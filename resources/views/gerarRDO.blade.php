@extends('adminlte::page')
@section('content')
<h1>Gerar RDO</h1>
<form>
    <div>
        <h3 class="md-6">Cliente</h3>
    </div>
    <div class="form-row">
        <div class="form-group col md-6">
            <label for="inputnome1">Nome</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Nome">
        </div>
        <div class="form-group col md-6">
            <label for="inputnome1">Razão Social</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Razão Social">
        </div>
    </div>

    <div class="row">
        <div class="form-group col md-6">
            <label for="inputnome1">Email</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Email">
        </div>
        <div class="form-group col md-6">
            <label for="inputnome1">Telefone</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Telefone">
        </div>
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Informações do Serviço</h3>
    </div>
    <div class="form-row">
        <div class="form-group col md-6">
            <label for="inputnome1">Horário Planejado</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Horario Planejado">
        </div>
        <div class="form-group col md-6">
            <label for="inputnome1">Horário Realizado</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Horário Realizado">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col md-6">
            <label for="inputnome1">Tempo de Execução</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Tempo de Execução">
        </div>
        <div class="form-group col md-6">
            <label for="inputnome1">Tempo de Início de Atendimento</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Tempo de Início de Atendimento">
        </div>
    </div>

    <div class="form-group col-6 md-6">
        <label for="inputnome1">Tempo de Finalizção do Atendimento</label>
        <input type="text" class="form-control" id="inputnome1" placeholder="Tempo de Finalizção do Atendimento">
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Início do Trabalho</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="inputnome1">Horário de Início</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Início do Trabalho">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-8 md-4">
            <label for="inputnome1">Localização</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Localização">
        </div>
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Informações de Obra</h3>
    </div>
    <div class="form-row">
        <div class="form-group col md-6">
            <label for="inputnome1">Turno</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Turno">
        </div>
        <div class="form-group col md-6">
            <label for="inputnome1">Condição Climática</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Condição Climática">
        </div>
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Descrição do Serviço</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="inputnome1">Condições do Trabalho no Dia</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Condições do Trabalho no Dia">
        </div>
    </div>
    <div class="form-row">
        <div class="col-10">
            <label for="inputnome1" class="form-label">Limitador de Desempenho</label>
            <div class="input-group">
                <input type="text" class="form-control" id="inputnome1" placeholder="Limitador de Desempenho">
                <button class="btn btn-primary ms-2" type="button" style="margin-left: 10px;">Analisar</button>
            </div>
        </div>
    </div>
</form>
<form>
    <div>
        <h3 class="md-6">Serviços Realizados</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="inputnome1">Código-Nome</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Código-Nome">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Quantidade</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Quantidade">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Preço Unt.</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Preço Unt.">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Sub Total</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Sub Total">
        </div>
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Mão de Obra Mobilizada</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="inputnome1">Código-Nome</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Código-Nome">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Quantidade</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Quantidade">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Preço Unt.</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Preço Unt.">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Sub Total</label>
            <input type="text" class="form-control" id="inputnome1" placeholder="Sub Total">
        </div>
    </div>
</form>

<form>
    <label for="anexoimg">Anexar imagem</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Escolher arquivo</label>
    </div>
</form>

<div class="form-row">
    <div class="col-10">
        <label for="inputnome1" class="form-label">Assinatura do Responsável</label>
        <div class="input-group">
            <input type="text" class="form-control" id="inputnome1">
            <button class="btn btn-primary ms-2" type="button" style="margin-left: 10px;">Enviar</button> 
        </div>
    </div>
</div>

@stop