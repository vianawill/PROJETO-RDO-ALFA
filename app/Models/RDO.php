<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDO extends Model
{
    use HasFactory;

    protected $table = 'rdos';

    // Defina os campos que podem ser atribuídos em massa
    protected $fillable = [
        'cliente_nome',
        'cliente_razao',
        'cliente_email',
        'cliente_telefone',
        'servico_horario_planejado',
        'servico_horario_realizado',
        'servico_tempo_execucao',
        'servico_tempo_inicio_atendimento',
        'servico_tempo_finalizacao_atendimento',
        'servico_horario_inicio',
        'servico_localizacao',
        'servico_turno',
        'servico_condicao_climatica',
        'servico_condicoes_trabalho_dia',
        'servico_limitador_desempenho',
        'servico_codigo_nome',
        'servico_quantidade',
        'servico_preco_unitario',
        'servico_subtotal',
        'MO_codigo_nome',
        'MO_quantidade',
        'MO_preco_unitario',
        'MO_subtotal',
        'fotografia',
        'assinatura_responsavel'
    ];
}

