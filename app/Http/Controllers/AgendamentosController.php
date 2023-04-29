<?php

namespace App\Http\Controllers;
use App\Models\Agendamentos;

use Illuminate\Http\Request;

class AgendamentosController extends Controller
{
    public function index(){
        return view('index');
    }

    public function consulta(){
        return view('consulta');
    }

    public function create(Request $request){
        Agendamentos::create([
            'name' => $request->name,
            'tel' => $request->tel,
            'origin' => $request->origin,
            'dt_ctt' => $request->dt_ctt,
            'observation' => $request->observation,
        ]);

        return redirect()
        ->back()
        ->with('mensagem', 'Agendamento finalizado com sucesso!');
    }

    public function read(){
        $listar = Agendamentos::get();

        return view('consulta', compact('listar'));
    }

    public function selectAgend($id){
        $agend = Agendamentos::where('id', '=', $id)->first();
        return view('update', compact('agend'));
    }

    public function update(Request $request){
        Agendamentos::where('id', '=',  $request->id)->update([
            'name' => $request->name,
            'tel' => $request->tel,
            'origin' => $request->origin,
            'dt_ctt' => $request->dt_ctt,
            'observation' => $request->observation,
        ]);

        return redirect('/agendamento/read')
        ->with('mensagem', 'Agendamento atualizado com sucesso!');
    }

    public function delete($id){
        Agendamentos::where('id', '=', $id)->delete();

        return redirect()
        ->back()
        ->with('mensagem', 'Agendamento deletado com sucesso!');
    }
}
