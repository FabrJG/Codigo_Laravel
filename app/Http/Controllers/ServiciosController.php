<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    

    public function index(){
        /*$servicios = [
            ['titulo'=>'Mantenimiento'],
            ['titulo'=>'Afinamiento'],
            ['titulo'=>'Cambio de Aceite'],
            ['titulo'=>'Lavado tipo Salon']
        ];*/
        $servicios = Servicio::get();
        $servicios = Servicio::orderBy('titulo','asc')->paginate(2); 
        return view('servicios', compact('servicios'));
    }

    public function show($id){
        return view('show',['servicio'=>Servicio::find($id)]);
    }
}
