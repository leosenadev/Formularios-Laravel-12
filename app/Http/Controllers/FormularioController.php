<?php

namespace App\Http\Controllers;
use App\Models\FormularioContato;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('principal');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('principal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       /*Salvando os dados 1 - MODEL
            $formContato = new FormularioContato();
            $formContato->nome           = $request->nome;
            $formContato->telefone       = $request->telefone;
            $formContato->email          = $request->email;
            $formContato->motivo_contato = $request->motivo_contato;
            $formContato->mensagem       = $request->mensagem;
            $formContato->save();
        */
       
       /*Salvando os dados massivo 2 - MODEL
            $formContato = new FormularioContato();
            $formContato->fill($request->all());
        */
         $regras= [
            'nome'=>'required|min:3|max:40|unique:contatos',
            'telefone'=>'required|min:11|unique:contatos',
            'email'=>'email|required|unique:contatos',
            'motivo_contato'=>'required|min:1',
            'mensagem'=>'required'
        ];
        $feedback = [
            'nome.min'=>'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max'=>'O campo nome deve ter no máximo 40 caracteres',
            'nome.unique'=>'O nome informado já está em uso',
            'email.email'=>'O email informado não é válido',
            'mensagem.max'=>'A mensagem deve ter no máximo 2000 caracteres',
            'required'=>'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras,$feedback);
        //dd($request->all());
            $formContato = new FormularioContato();
            $formContato->nome           = $request->nome;
            $formContato->telefone       = $request->telefone;
            $formContato->email          = $request->email;
            $formContato->motivo_contato = $request->motivo_contato;
            $formContato->mensagem       = $request->mensagem;
            $formContato->save();
       return redirect()->route('index')->with('sucesso','Formulário enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
