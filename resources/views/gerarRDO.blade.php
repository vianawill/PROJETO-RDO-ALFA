@extends('adminlte::page')
@section('content')

<head>
    <h1>Gerar RDO</h1>
</head>
<form action="{{ route('rdo.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
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

    <div>
        <h3 class="md-6">Descrição do Serviço</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="inputcondicaotrabalho">Condições do Trabalho no Dia</label>
            <input type="text" class="form-control" id="inputcondicaotrabalho" name="servico_condicoes_trabalho_dia" placeholder="Informe as condições do trabalho no dia...">
        </div>
    </div>
    <div class="form-row">
        <div class="col-10">
            <label for="inputlimitadordesempenho" class="form-label">Limitador de Desempenho</label>
            <div class="input-group">
                <input type="text" class="form-control" id="inputlimitadordesempenho" name="servico_limitador_desempenho" placeholder="Informe as limitações de desempenho...">
            </div>
        </div>
    </div>

    <div>
        <h3 class="md-6">Serviços Realizados</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="iputcodigonomeservico">Código-Nome</label>
            <input type="text" class="form-control" id="iputcodigonomeservico" name="servico_codigo_nome" placeholder="Digite o código ou nome...">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputquantidadeservico">Quantidade</label>
            <input type="number" class="form-control" id="inputquantidadeservico" name="servico_quantidade" placeholder="0">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputprecounitarioservico">Preço Unt.</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputprecounitarioservico" name="servico_preco_unitario" placeholder="R$ 0,00">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputsubtotalservico">Sub Total</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputsubtotalservico" name="servico_subtotal" placeholder="R$ 0,00">
        </div>
    </div>

    <div>
        <h3 class="md-6">Mão de Obra Mobilizada</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-6 md-6">
            <label for="iputcodigonomeMO">Código-Nome</label>
            <input type="text" class="form-control" id="iputcodigonomeMO" name="MO_codigo_nome" placeholder="Digite o código ou nome...">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputquantidadeMO">Quantidade</label>
            <input type="number" class="form-control" id="inputquantidadeMO" name="MO_quantidade" placeholder="0">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputprecounitarioMO">Preço Unt.</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputprecounitarioMO" name="MO_preco_unitario" placeholder="R$ 0,00">
        </div>
        <div class="form-group col-2 md-6">
            <label for="inputsubtotalMO">Sub Total</label>
            <input type="number" step="0,01" min="0" class="form-control" id="inputsubtotalMO" name="MO_subtotal" placeholder="R$ 0,00">
        </div>
    </div>

    <div class="custom-file">
        <label for="anexoimg">Anexar imagem</label>
        <input type="file" class="custom-file-input" id="customFile" name="fotografia">
        <label class="custom-file-label" for="customFile">Escolher arquivo</label>
    </div>


    <div class="form-row">
        <div class="col-10">
            <label for="inputassinatura" class="form-label">Assinatura do Responsável</label>
            <div class="input-group">
                <input type="text" class="form-control" id="inputassinatura" name="assinatura_responsavel">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar RDO</button>

</form>

@stop