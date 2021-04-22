<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Estabelecimento;
use App\Models\User;
use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $estabelecimentos = Estabelecimento::with('produtos')->get();
        return view('site.index', compact('estabelecimentos'));
    }

    public function delivery()
    {
        $estabelecimentos = Estabelecimento::with('produtos')->get();
        return view('site.estabelecimentos.delivery', compact('estabelecimentos'));
    }

    public function gastronomia()
    {
        $estabelecimentos = Estabelecimento::with('produtos')->get();
        return view('site.estabelecimentos.gastronomia', compact('estabelecimentos'));
    }
    public function cosmeticos()
    {
        $estabelecimentos = Estabelecimento::with('produtos')->get();
        return view('site.estabelecimentos.cosmeticos', compact('estabelecimentos'));
    }
    public function lojas()
    {
        $estabelecimentos = Estabelecimento::with('produtos')->get();
        return view('site.estabelecimentos.lojas', compact('estabelecimentos'));
    }

    public function cardapio($id)
    {

        $estabelecimento = Estabelecimento::with('produtos', 'categorias')->find($id);
        return view('site.estabelecimentos.cardapio', compact('estabelecimento'));
    }
    public function produto($id)
    {

        $produto = Produto::with('categoria')->where('category_id', $id)->get();

        return view('site.produto', compact('produto'));
    }

    public function cliente()
    {
        $id = auth()->user()->id;
        $user = User::with('estabelecimento', 'categoria')->find($id);
        $users = User::paginate(10);
        return view('cliente.index', compact('user', 'users'));
    }

    public function coming()
    {
        return view('site.coming');
    }
}
