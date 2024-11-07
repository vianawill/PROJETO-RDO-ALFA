@extends('adminlte::page')
@section('content')
<head>
    <h1>Gerar RDO</h1>
</head>
<form>
    <div>
        <h3 class="md-6">Cliente</h3>
    </div>
    <div class="form-row">
        <div class="form-group col md-6">
            <label for="inputnome1">Nome</label>
            <input type="text" class="form-control" id="inputnome1" name="cliente_nome" placeholder="Digite seu nome completo...">
        </div>
        <div class="form-group col md-6">
            <label for="inputrazao">Razão Social</label>
            <input type="text" class="form-control" id="inputrazao" name="cliente_razao" placeholder="Digite a razão social...">
        </div>
    </div>

    <div class="row">
        <div class="form-group col md-6">
            <label for="inputemail">Email</label>
            <input type="text" class="form-control" id="inputemail" name="cliente_email" placeholder="exemplo@dominio.com">
        </div>
        <div class="form-group col md-6">
            <label for="inputtelefone">Telefone</label>
            <input type="text" class="form-control" id="inputtelefone" name="cliente_telefone" placeholder="(XX) XXXXX-XXXX">
        </div>
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Informações do Serviço</h3>
    </div>
    <div class="form-row">
        <div class="form-group col md-6">
            <label for="inputhorarioplanejado">Horário Planejado</label>
            <input type="text" class="form-control" id="inputhorarioplanejado" name="servico_horario_planejado" placeholder="Informe a data e o horario planejado...">
        </div>
        <div class="form-group col md-6">
            <label for="inputhorariorealizado">Horário Realizado</label>
            <input type="text" class="form-control" id="inputhorariorealizado" name="servico_horario_realizado" placeholder="Informe a data e o horario realizado...">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col md-6">
            <label for="inputtempoexecucao">Tempo de Execução</label>
            <input type="text" class="form-control" id="inputtempoexecucao" name="servico_tempo_execucao" placeholder="Tempo de Execução">
        </div>
        <div class="form-group col md-6">
            <label for="inputtempoinicioatendimento">Tempo de Início do Atendimento</label>
            <input type="text" class="form-control" id="inputtempoinicioatendimento" name="servico_tempo_inicio_atendimento" placeholder="Tempo do Início de Atendimento">
        </div>
    </div>

    <div class="form-group col-6 md-6">
        <label for="inputtempofinalizacaoatendimento">Tempo de Finalizção do Atendimento</label>
        <input type="text" class="form-control" id="inputtempofinalizacaoatendimento" name="servico_tempo_finalizacao_atendimento" placeholder="Tempo de Finalizção do Atendimento">
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Início do Trabalho</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="inputhorarioinicio">Horário de Início</label>
            <input type="text" class="form-control" id="inputhorarioinicio" name="servico_horario_inicio" placeholder="Informe a data e o horario do inicio do trabalho...">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-8 md-4">
            <label for="inputlocalizacao">Localização</label>
            <input type="text" class="form-control" id="inputlocalizacao" name="servico_localizacao" placeholder="Informe a sua localização...">
        </div>
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Informações de Obra</h3>
    </div>
    <div class="form-group col md-6">
        <label for="selectturno">Turno</label>
        <select class="form-control" id="selectturno" name="servico_turno" placeholder="Informe o turno...">>
        <option>Manhã</option>
        <option>Tarde</option>
        <option>Noite</option>
        </select>
    </div>
        <div class="form-group col md-6">
            <label for="inputcondicaoclimatica">Condição Climática</label>
            <input type="text" class="form-control" id="inputcondicaoclimatica" name="servico_condicao_climatica" placeholder="Informe a condição climática...">
        </div>
    </div>
</form>

<form>
    <div>
        <h3 class="md-6">Descrição do Serviço</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="inputcondicaotrabalho">Condições do Trabalho no Dia</label>
            <input type="text" class="form-control" id="inputcondicaotrabalho" name="trabalho_co" placeholder="Informe as condições do trabalho no dia...">
        </div>
    </div>
    <div class="form-row">
        <div class="col-10">
            <label for="inputnome1" class="form-label">Limitador de Desempenho</label>
            <div class="input-group">
                <input type="text" class="form-control" id="inputnome1" placeholder="Informe as limitações de desempenho...">
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
            <input type="text" class="form-control" id="inputnome1" placeholder="Digite o código ou nome...">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Quantidade</label>
            <input type="number" class="form-control" id="inputnome1" placeholder="0">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Preço Unt.</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputnome1" placeholder="R$ 0,00">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Sub Total</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputnome1" placeholder="R$ 0,00">
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
            <input type="text" class="form-control" id="inputnome1" placeholder="Digite o código ou nome...">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Quantidade</label>
            <input type="number" class="form-control" id="inputnome1" placeholder="0">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Preço Unt.</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputnome1" placeholder="R$ 0,00">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputnome1">Sub Total</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputnome1" placeholder="R$ 0,00">
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
        </div>
    </div>
</div>

@stop