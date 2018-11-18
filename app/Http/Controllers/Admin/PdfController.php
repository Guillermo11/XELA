<?php

namespace App\Http\Controllers\Admin;
use App\Usuario;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
    {
        return view("pdf.lista_usuario");
    }


      public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte_Usuario($tipo){

     $vistaurl="pdf.reporte_Usuario";
     $paises=Usuario::all();

     return $this->crearPDF($paises, $vistaurl,$tipo);




    }
    //
}
