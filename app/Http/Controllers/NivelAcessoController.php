<?php

namespace App\Http\Controllers;

use App\Models\NivelAcesso;
use Exception;
use Illuminate\Http\Request;

class NivelAcessoController extends Controller{

    public function listar(){
        $nivelAcesso = NivelAcesso::all();
        return view('nivel-acesso.listar', compact('nivelAcesso'));
    }

    public function cadastro(){
        return view('nivel-acesso.cadastro');
    }

    public function add(Request $request){

        $request->validate([
            'nivelAcesso' => 'required|string|max:255',
        ]);

        try{
        $nivelAcesso = NivelAcesso::create([
            'nivel_acesso' => $request->nivelAcesso,
        ]);

        return redirect()->back()->with('success','Nivel cadastrado com sucesso!');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Erro ao cadastrar o nivel de acesso: ' . $e->getMessage());
            
        }
    }

//     public function atualizar($id){
//         $produto = Produto::with('detalhe')->findOrFail($id);
//         $setores = Setor::all();
//         return view('atualizar', compact('produto','setores'));
//     }

//     public function update(Request $request, $id){

//         $request->validate([
//             'nome' => 'required|string|max:255',
//             'quantidade' => 'required|string|max:255',
//             'preco' => 'required|string|max:255',
//             'descricao' => 'required|string|max:255',
//             'tamanho' => 'required|string|max:255',
//             'peso' => 'required|numeric|max:255'
//         ]);

//         $produto = Produto::findOrFail($id);

//         // atualiza produto
//         $produto->update([
//             'nome' => $request->nome,
//             'quantidade' => $request->quantidade,
//             'preco' => $request->preco,
//         ]);

//         // atualiza detalhe
//         $produto->detalhe->update([
//             'descricao' => $request->descricao,
//             'tamanho' => $request->tamanho,
//             'peso' => $request->peso,
//         ]);

//         return redirect()->back()->with('success','Produto atualizado com sucesso!');
//     }

        public function deletar(int $id){
            $nivelAcesso = NivelAcesso::findOrFail($id);
            $nivelAcesso->delete();

            return redirect()->route('nivel-acesso.listar')->with('success','Nível de Acesso excluído com sucesso!');
        }
}