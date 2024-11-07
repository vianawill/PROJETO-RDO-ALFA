<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdoReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('rdo_reports', function (Blueprint $table) {
        $table->id();
        
        // Dados do Cliente
        $table->string('cliente_nome')->nullable();
        $table->string('cliente_razao_social')->nullable();
        $table->string('cliente_email')->nullable();
        $table->string('cliente_telefone')->nullable();
        
        // Informações do Serviço
        $table->datetime('servico_horario_planejado')->nullable();
        $table->datetime('servico_horario_realizado')->nullable();
        $table->string('servico_tempo_execucao')->nullable();
        $table->string('servico_tempo_inicio_atendimento')->nullable();
        $table->string('servico_tempo_finalizacao_atendimento')->nullable();
        
        // Início do Trabalho
        $table->datetime('trabalho_horario_inicio')->nullable();
        $table->string('trabalho_localizacao')->nullable();

        // Informações de Obra
        $table->enum('obra_turno', ['Manhã', 'Tarde', 'Noite'])->nullable();
        $table->string('obra_condicao_climatica')->nullable();

        // Descrição do Serviço
        $table->text('descricao_condicoes_trabalho')->nullable();
        $table->text('descricao_limitador_desempenho')->nullable();

        // Serviços Realizados e Mão de Obra Mobilizada
        // Para estes campos, é recomendável criar tabelas separadas para armazenar listas de serviços e mão de obra,
        // com uma relação com a tabela principal 'rdo_reports'. Veja as tabelas auxiliares abaixo.

        // Campos adicionais
        $table->string('assinatura_responsavel')->nullable();
        $table->string('imagem_anexo')->nullable();

        $table->timestamps();
    });

    Schema::create('rdo_servicos_realizados', function (Blueprint $table) {
        $table->id();
        $table->foreignId('rdo_report_id')->constrained('rdo_reports')->onDelete('cascade');
        $table->string('codigo_nome')->nullable();
        $table->integer('quantidade')->nullable();
        $table->decimal('preco_unitario', 10, 2)->nullable();
        $table->decimal('sub_total', 10, 2)->nullable();
        $table->timestamps();
    });

    Schema::create('rdo_mao_obra_mobilizada', function (Blueprint $table) {
        $table->id();
        $table->foreignId('rdo_report_id')->constrained('rdo_reports')->onDelete('cascade');
        $table->string('codigo_nome')->nullable();
        $table->integer('quantidade')->nullable();
        $table->decimal('preco_unitario', 10, 2)->nullable();
        $table->decimal('sub_total', 10, 2)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rdo_reports');
    }
}
