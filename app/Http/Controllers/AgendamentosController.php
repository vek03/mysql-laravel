<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agendamentos;

class AgendamentosController extends Controller
{
    public function index(){

        return view('index');

    }

    public function consulta(){

        $agend = $this->readList();

        return view('consulta', compact('agend'));

    }

    public function welcome(){

        return view('welcome');

    }

    public function create(Request $request){

        Agendamentos::create($request->all());

        return back()->with('mensagem', 'Agendamento finalizado com sucesso!');

    }

    public function readList(){

        return Agendamentos::get();

    }

    public function readOne($id){

        $agend = Agendamentos::where('id', '=', $id)->first();

        if(!empty($agend)){
            return view('update', compact('agend'));
        }
        else{
            return back()->with('mensagem', 'Esse agendamento não existe mais!');
        }

    }

    public function update(Request $request){

        Agendamentos::where('id', '=',  $request->id)->update([
            'name' => $request->name,
            'tel' => $request->tel,
            'origin' => $request->origin,
            'dt_ctt' => $request->dt_ctt,
            'observation' => $request->observation,
        ]);

        return redirect('/consulta')->with('mensagem', 'Agendamento atualizado com sucesso!');

    }

    public function delete($id){

        Agendamentos::where('id', '=', $id)->delete();

        return back()->with('mensagem', 'Agendamento deletado com sucesso!');

    }
}
