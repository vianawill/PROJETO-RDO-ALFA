<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_nome');
            $table->string('cliente_razao');
            $table->string('cliente_email');
            $table->string('cliente_telefone');
            $table->string('servico_horario_planejado');
            $table->string('servico_horario_realizado');
            $table->string('servico_tempo_execucao');
            $table->string('servico_tempo_inicio_atendimento');
            $table->string('servico_tempo_finalizacao_atendimento');
            $table->string('servico_horario_inicio');
            $table->string('servico_localizacao');
            $table->string('servico_turno');
            $table->string('servico_condicao_climatica');
            $table->string('servico_condicoes_trabalho_dia');
            $table->string('servico_limitador_desempenho');
            $table->string('servico_codigo_nome');
            $table->integer('servico_quantidade');
            $table->decimal('servico_preco_unitario', 10, 2);
            $table->decimal('servico_subtotal', 10, 2);
            $table->string('MO_codigo_nome');
            $table->integer('MO_quantidade');
            $table->decimal('MO_preco_unitario', 10, 2);
            $table->decimal('MO_subtotal', 10, 2);
            $table->string('fotografia')->nullable();
            $table->string('assinatura_responsavel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverte a migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rdos');
    }
};
