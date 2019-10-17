<?php

namespace App\Http\Controllers;

use App\Boleta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BoletaController extends Controller
{

    public function index(){
        $boletas = Boleta::all();
        return view('boletas.index')->with('boletas', $boletas);
    }

    public function nuevo(){
        return view('boletas.nuevo');
    }

    public function guardar(Request $request){

        $bol = new Boleta();
        $bol->lr_bol_fecha = Carbon::createFromFormat('d/m/Y', $request->fecha);
        $bol->total = $request->monto;
        $bol->save();

        return redirect('/');

    }


}
