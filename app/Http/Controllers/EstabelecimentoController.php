<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $price = str_replace(['.', ','], ['', '.'], $data['price']);
        $img = ImageManagerStatic::make($data['logo']);

        $name = Str::random() . '.jpg';

        $originalPath = storage_path('app/public/logos/');

        $img->save($originalPath . $name);

        $telefone = str_replace(' ', '', $data['telefone']);
        $whatsapp = str_replace(' ', '', $data['whatsapp']);

        $fone = str_replace('-', '', $telefone);
        $whats = str_replace('-', '', $whatsapp);

        $product = Estabelecimento::create([
            'user_id' => $user,
            'name' => $data['name'],
            'segmento' => $data['segmento'],
            'delivery' => $data['delivery'],
            'telefone' => $fone,
            'whatsapp' => $whats,
            'logo' => $name,
            'time' => $data['time'],
            'ifood' => $data['ifood']
        ]);

        return redirect()->back()->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = auth()->user()->id;
        $estabelecimentos = Estabelecimento::where('user_id', $id)->get();
        // dd($estabelecimento);
        return view('cliente.estabelecimento.show', compact('estabelecimentos'));
    }


    public function teste()
    {
        $id = auth()->user()->id;
        $user = User::with('estabelecimento')->find($id);
        dd($user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        return view('cliente.estabelecimento.edit', compact('estabelecimento'));
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
        $estabelecimento = Estabelecimento::find($id);
        $user  =  auth()->user()->id;
        $data = $request->all();

        $telefone = str_replace(' ', '', $data['telefone']);
        $whatsapp = str_replace(' ', '', $data['whatsapp']);

        $fone = str_replace('-', '', $telefone);
        $whats = str_replace('-', '', $whatsapp);

        if ($request->logo != '') {
            $path = storage_path('app/public/logos/');

            //code for remove old file
            if ($estabelecimento->logo != ''  && $estabelecimento->logo != null) {
                $file_old = $path . $estabelecimento->logo;
                unlink($file_old);
            }

            //upload new file
            $img = ImageManagerStatic::make($data['logo']);


            $name = Str::random() . '.jpg';

            $originalPath = storage_path('app/public/logos/');

            $img->save($originalPath . $name);

            //for update in table
            $estabelecimento->update(['logo' => $name]);
        }

        
        $estabelecimento->name =     $request->get('name');
        $estabelecimento->segmento = $request->get('segmento');
        $estabelecimento->delivery = $request->get('delivery');
        $estabelecimento->telefone = $fone;
        $estabelecimento->whatsapp = $whats;
        // $estabelecimento->logo = $request->get('country');
        $estabelecimento->time = $request->get('time');
        $estabelecimento->ifood = $request->get('ifood');
        $estabelecimento->save();


        return redirect()->route('cliente')->with('success', 'Estabelecimento alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
