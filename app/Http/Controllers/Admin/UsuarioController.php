<?php

namespace App\Http\Controllers\Admin;
use App\usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Support\Facades\Storage;
use App\Exports\UsersExport;
use MercurySeries\Flashy\Flashy;
use Maatwebsite\Excel\Facades\Excel;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {

       return view('Usuario.listar_User');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('Usuario.user');
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
 return redirect('Usuario/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $usuario= usuario::find($id);

    return view('Usuario.ver_datos',compact('usuario'));
    }


    public function Descargar($id)
      {  $dl = usuario::find($id);
      return Storage::download($dl->ruta_file);
      }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $usuario =usuario::find($id);
        return view('Usuario.actualizar',['usuario'=>$usuario]);//  //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, $id)
    {
      $usuario =usuario::find($id);
    $usuario ->fill($request->except('ruta_file'));
     if ($request->hasFile('ruta_file')) {
       $usuario->ruta_file = $request->file('ruta_file')->Store('public/curriculum');
       }
   $usuario ->save();
   return redirect('Usuario');
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
