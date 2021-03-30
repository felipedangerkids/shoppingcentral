<?php

namespace App\Http\Controllers;

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

    public function cardapio($id)
    {

        $estabelecimento = Estabelecimento::with('produtos')->find($id);
        return view('site.estabelecimentos.cardapio', compact('estabelecimento'));
    }
    public function produto($slug)
    {

        $produto = Produto::with('estabelecimento')->where('slug', $slug)->get()->first();
        return view('site.produto', compact('produto'));
    }

    public function cliente()
    {
        $id = auth()->user()->id;
        $user = User::with('estabelecimento')->find($id);
        $users = User::paginate(10);
        return view('cliente.index', compact('user', 'users'));
    }
}
