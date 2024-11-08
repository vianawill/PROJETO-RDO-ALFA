<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RDO;

class Registro_rdo extends Controller
{
    public function gerarRDO()
    {
        return view('gerarRDO'); // A view que você deseja exibir
    }

    // Método para listar todos os registros
    public function index()
    {
        $rdos = RDO::all(); // Busca todos os registros
        return view('index', compact('rdos')); // Retorna a view de listagem
    }

    // Método para salvar o formulário (já implementado)
    public function store(Request $request)
    {
        $request->validate([
            'cliente_nome' => 'required|string|max:255',
            'cliente_razao' => 'required|string|max:255',
            'cliente_email' => 'required|email',
            'cliente_telefone' => 'required|string|max:20',
            'servico_horario_planejado' => 'required|string',
            'servico_horario_realizado' => 'required|string',
            'servico_tempo_execucao' => 'required|string',
            'servico_tempo_inicio_atendimento' => 'required|string',
            'servico_tempo_finalizacao_atendimento' => 'required|string',
            'servico_horario_inicio' => 'required|string',
            'servico_localizacao' => 'required|string',
            'servico_turno' => 'required|string',
            'servico_condicao_climatica' => 'required|string',
            'servico_condicoes_trabalho_dia' => 'required|string',
            'servico_limitador_desempenho' => 'required|string',
            'servico_codigo_nome' => 'required|string',
            'servico_quantidade' => 'required|integer',
            'servico_preco_unitario' => 'required|numeric',
            'servico_subtotal' => 'required|numeric',
            'MO_codigo_nome' => 'required|string',
            'MO_quantidade' => 'required|integer',
            'MO_preco_unitario' => 'required|numeric',
            'MO_subtotal' => 'required|numeric',
            'fotografia' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'assinatura_responsavel' => 'required|string',
        ]);

        $rdo = new RDO();
        $rdo->cliente_nome = $request->cliente_nome;
        $rdo->cliente_razao = $request->cliente_razao;
        $rdo->cliente_email = $request->cliente_email;
        $rdo->cliente_telefone = $request->cliente_telefone;
        $rdo->servico_horario_planejado = $request->servico_horario_planejado;
        $rdo->servico_horario_realizado = $request->servico_horario_realizado;
        $rdo->servico_tempo_execucao = $request->servico_tempo_execucao;
        $rdo->servico_tempo_inicio_atendimento = $request->servico_tempo_inicio_atendimento;
        $rdo->servico_tempo_finalizacao_atendimento = $request->servico_tempo_finalizacao_atendimento;
        $rdo->servico_horario_inicio = $request->servico_horario_inicio;
        $rdo->servico_localizacao = $request->servico_localizacao;
        $rdo->servico_turno = $request->servico_turno;
        $rdo->servico_condicao_climatica = $request->servico_condicao_climatica;
        $rdo->servico_condicoes_trabalho_dia = $request->servico_condicoes_trabalho_dia;
        $rdo->servico_limitador_desempenho = $request->servico_limitador_desempenho;
        $rdo->servico_codigo_nome = $request->servico_codigo_nome;
        $rdo->servico_quantidade = $request->servico_quantidade;
        $rdo->servico_preco_unitario = $request->servico_preco_unitario;
        $rdo->servico_subtotal = $request->servico_subtotal;
        $rdo->MO_codigo_nome = $request->MO_codigo_nome;
        $rdo->MO_quantidade = $request->MO_quantidade;
        $rdo->MO_preco_unitario = $request->MO_preco_unitario;
        $rdo->MO_subtotal = $request->MO_subtotal;

        if ($request->hasFile('fotografia')) {
            $path = $request->file('fotografia')->store('fotografias', 'public');
            $rdo->fotografia = $path;
        }

        $rdo->assinatura_responsavel = $request->assinatura_responsavel;
        $rdo->save();

        return redirect()->back()->with('success', 'RDO salvo com sucesso!');
    }

    // Método para excluir um registro
    public function destroy($id)
    {
        $rdo = RDO::findOrFail($id);
        $rdo->delete();

        return redirect()->route('index')->with('success', 'RDO excluído com sucesso!');
    }
}

