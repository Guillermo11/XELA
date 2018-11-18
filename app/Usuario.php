<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $fillable = [
'fercha_hoy','nombres','apellidos','dpi','edad',
  'fecha_nacimiento','genero','estado_civil',
    'telefono','direccion','nunicipio','educacion',
      'carrera_titulo','expe_laboral','tiempo_laborado','empresa_laborado',
        'puesto_laboral','laboro_fuera','tiempofuera','ruta_file',

];
}
