<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produtos = Produto::where('user_id', auth()->user()->id)->get();
        return view('cliente.produto.lista', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user  =  auth()->user()->id;
        $price = str_replace(['.', ','], ['', '.'], $data['price']);
        $img = ImageManagerStatic::make($data['image']);


        $name = Str::random() . '.jpg';

        $originalPath = storage_path('app/public/products/');

        $img->save($originalPath . $name);

        $product = Produto::create([
            'est_id' => $data['est'],
            'user_id' => $user,
            'image' => $name,
            'name' => $data['name'],
            'desc' => $data['desc'],
            'price' => $price,
            'time' => $data['time']
        ]);

        return redirect()->back()->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Produto::find($id);
        $product->delete();

        return redirect()->back()->with('success', 'Produto deletado com sucesso!'); 
    }
}
