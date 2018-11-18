<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\Evento;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Storage;
use MercurySeries\Flashy\Flashy;
class VumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Evento::orderBy('id', 'DESC')->paginate(3);
      return view('web.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(UsuarioRequest $request)
   {
     $usuario= new usuario;
$usuario->fercha_hoy= $request["fercha_hoy"];
$usuario->nombres= $request["nombres"];
$usuario->apellidos=$request["apellidos"];
$usuario->dpi=$request["dpi"];
$usuario->edad=$request["edad"];
$usuario->fecha_nacimiento=$request["fecha_nacimiento"];
$usuario->genero=$request["genero"];
$usuario->estado_civil=$request["estado_civil"];
$usuario->direccion=$request["direccion"];
$usuario->nunicipio=$request["nunicipio"];
$usuario->telefono=$request["telefono"];
$usuario->educacion=$request["educacion"];
$usuario->carrera_titulo=$request["carrera_titulo"];
$usuario->expe_laboral=$request["expe_laboral"];
$usuario->tiempo_laborado=$request["tiempo_laborado"];
$usuario->empresa_laborado=$request["empresa_laborado"];
$usuario->puesto_laboral=$request["puesto_laboral"];
$usuario->laboro_fuera=$request["laboro_fuera"];
$usuario->tiempofuera=$request["tiempofuera"];
if ($request->hasFile('ruta_file')) {
$usuario->ruta_file = $request->file('ruta_file')->Store('public/curriculum');
}

$resul= $usuario->save();
Flashy::success('Sus datos fueron Ingesados de forma Exitosa');
return redirect('menu/create');
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
        //
    }
}
