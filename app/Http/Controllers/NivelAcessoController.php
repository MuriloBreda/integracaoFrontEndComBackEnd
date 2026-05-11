<?php

namespace App\Http\Controllers;

use App\Models\NivelAcesso;
use Illuminate\Http\Request;

class NivelAcessoController extends Controller{

    // public function listar(){
    //     $produtos = Produto::with(['setor','detalhe'])->get();
    //     return view('listar', compact('produtos'));


    public function cadastro(){
        return view('nivel-acesso.cadastro');
    }

//     public function add(Request $request){

//         $request->validate([
//             'nome' => 'required|string|max:255',
//             'quantidade' => 'required|string|max:255',
//             'preco' => 'required|string|max:255',
//             'descricao' => 'required|string|max:255',
//             'tamanho' => 'required|string|max:255',
//             'peso' => 'required|numeric|max:255',
//             'setor_id' => 'required|exists:setores,id'
//         ]);

//         $detalhe = DetalheProduto::create([
//             'descricao' => $request->descricao,
//             'tamanho' => $request->tamanho,
//             'peso' => $request->peso,
//         ]);

//         Produto::create([
//             'nome' => $request->nome,
//             'quantidade' => $request->quantidade,
//             'preco' => $request->preco,
//             'setor_id' => $request->setor_id,
//             'detalhes_id' => $detalhe->id
//         ]);

//         return redirect()->back()->with('success','Produto cadastrado com sucesso!');
//     }

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

//     public function deletar($id){
//         $produto = Produto::findOrFail($id);
//         $produto->delete();

//         return redirect()->route('produto.listar')->with('success','Produto excluído com sucesso!');
//     }
}