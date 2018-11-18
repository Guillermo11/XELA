<?php

namespace App\Http\Controllers\Admin;
use App\Evento;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\EventoRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateEventoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventoController extends Controller
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
          return View('Eventos.vista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View('Eventos.Crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoRequest $request)
    {
      $evento= new Evento;
  $evento->name= $request["name"];
  $evento->description=$request["description"];
  $evento->date= $request["fercha_hoy"];

if ($request->hasFile('ruta_Photo')) {
$evento->ruta_Photo = $request->file('ruta_Photo')->Store('public/Eventos');
}
$resul= $evento->save();
return redirect('evento/create');  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $evento= Evento::find($id);

  return view('Eventos.verInfo',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $evento =Evento::find($id);
          return view('Eventos.actualizar',['evento'=>$evento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventoRequest $request, $id)
    {
      $evento =Evento::find($id);
        $evento ->fill($request->except('ruta_Photo'));
         if ($request->hasFile('ruta_Photo')) {
         $evento->ruta_Photo = $request->file('ruta_Photo')->Store('public/Eventos');
           }
       $evento ->save();
       return redirect('evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Evento::destroy($id);
     return redirect('evento');
    }
}
