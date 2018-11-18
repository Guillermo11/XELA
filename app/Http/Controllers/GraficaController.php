<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;
use App\Evento;
use App\post;
class GraficaController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function getUltimoDiaMes($elAnio,$elMes) {
     return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }


        public function registros_mes($anio,$mes)
        {
            $primer_dia=1;
            $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
            $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
            $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
            $usuarios=Usuario::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->get();
            $ct=count($usuarios);

            for($d=1;$d<=$ultimo_dia;$d++){
                $registros[$d]=0;
            }

            foreach($usuarios as $usuario){
            $diasel=intval(date("d",strtotime($usuario->created_at) ) );
            $registros[$diasel]++;
            }

            $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
            return   json_encode($data);
        }
        public function grafica_registros_eventos($anio,$mes)
        {
            $primer_dia=1;
            $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
            $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
            $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
            $usuarios=Evento::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->get();
            $ct=count($usuarios);

            for($d=1;$d<=$ultimo_dia;$d++){
                $registros[$d]=0;
            }

            foreach($usuarios as $usuario){
            $diasel=intval(date("d",strtotime($usuario->created_at) ) );
            $registros[$diasel]++;
            }

            $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
            return   json_encode($data);
        }



        public function index()
          {
              $anio=date("Y");
              $mes=date("m");
              return view("Grafica.listado_graficas")
                     ->with("anio",$anio)
                     ->with("mes",$mes);
          }

}
