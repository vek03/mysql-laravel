<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Agendamentos;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    $agends = new Agendamentos;
    $agends->name = 'Victor';
	$agends->tel = '(11)95995-5896';
	$agends->origin = 'Telefone';
	$agends->dt_ctt = '2023-03-17';
	$agends->observation = 'Espero que funcione.';
	$agends->save();
    */
}
