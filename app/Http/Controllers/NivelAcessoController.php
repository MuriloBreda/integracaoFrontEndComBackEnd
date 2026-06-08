<?php

namespace App\Http\Controllers;

use App\Models\NivelAcesso;
use Exception;
use Exeption;
use Illuminate\Http\Request;

class NivelAcessoController extends Controller
{
    public function listar(){
        $nivelAcesso = NivelAcesso::all();
        return view('nivel-acesso.listar', compact('nivelAcesso'));
    }

    public function cadastro(){
        return view('nivel-acesso.cadastro');
    }

    public function add(Request $request){

        $request->validate([
            'nivelAcesso' => 'required|string|max:255'
        ]);

        try{
            $nivelAcesso = NivelAcesso::create([
                'nivel_acesso' => $request->nivelAcesso,
            ]);

            return redirect()->back()->with('success','Nivel de Acesso cadastrado com sucesso!');
        }catch(Exception $e){
            return redirect()->back()->with('error','Erro ao Cadastrar Nível de Acesso!');
        }

    }

    public function atualizar($id){
        $nivelAcesso = NivelAcesso::findOrFail($id); // Busca pelo ID
        return view('nivel-acesso.atualizar', compact('nivelAcesso'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nivelAcesso' => 'required|string|max:255'
        ]);

        $nivelDeAcesso = NivelAcesso::findOrFail($id); // buscar o id que vai ser atualizado
    
        $nivelDeAcesso->nivel_acesso = $request->nivelAcesso; // atualizando o campo nivel_acesso

        $nivelDeAcesso->save(); // salvando no banco de dados (fazendo update)

        return redirect()->back()->with('success','Nível de Acesso atualizado com sucesso!');
    }

    public function deletar(int $id){
        $nivelAcesso = NivelAcesso::findOrFail($id); // buscar o NivelAcesso para depois deletar
        $nivelAcesso->delete(); // faz o delete no banco de dados

        return redirect()->route('nivel-acesso.listar')
            ->with('success','Nível de Acesso excluído com sucesso!');
    }

}