<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vocapark;

class frasesController extends Controller
{
    public function index(){
    $frase = Vocapark::all();

    return view('paginas.misFrases',array("frases" => $frase));
    }

    //metodo que retorna la vista para registrar una Frase
    public function getForm(){
        return view('paginas.registrarFrase'); 
    } 

    //metodo para registrar una frase del formulario 

    public function store( Request $request){
        $frase = new Vocapark();
            $frase->palabra = $request->post('palabra');
            $frase->traduccion = $request->post('traduccion');

            //insertando el nuevo registro a la tabla de registros

            $frase->save();
            return redirect()->route('getFrases');
        //  en el return redireccionamos la vista al listado de los cursos
    }

    public function edit($id_palabras){

        // $frase = Vocapark::find($id_palabras);
    //    $frase = Vocapark::findOrFail($id);
         $frase = Vocapark::where('id_palabras',$id_palabras)->first();
      return view('paginas.editFrase',array("frase" => $frase));
 

  }
}