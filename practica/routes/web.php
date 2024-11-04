<?php

use App\Http\Controllers\CorrerController;
use App\Models\Alumnos;
use App\Models\Computer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/correr', [CorrerController::class, 'index']);
Route::get('/cuerda', [CorrerController::class, 'cuerda']);
Route::get('/ciclismo', [CorrerController::class, 'ciclismo']);
Route::get('/caminar', [CorrerController::class, 'caminar']);
Route::get('/gym', [CorrerController::class, 'gym']);

Route::get('/tenis', function(){
    
/*
$computer = new Computer;
$computer->model='Nike';
$computer->precio=1500;
$computer->color='azul';
$computer->Gènero='Hombre';
$computer->talla=9;
$computer->Tipo='tenis';
$computer->save();

return $computer;*/

//seleccionar por id

/*$computer =Computer::find(1);
return $computer;*/
/*
//seleccion por filtro where
$computer = Computer::where('model','Running Nike')->first();
$computer->model='Nike';
$computer->save();
return $computer;*/

/*
//seleccion de todos los registros
$computer = Computer::all();
return $computer;*/

/*
//seleccion de una parte de los registros
$computer= Computer::where('id','>=',1)->orderBy('id','desc')->get();
return $computer;*/
/*
//seleccion de campos a desplegar
$computer = Computer::where('id','>=',1)
->select('model','precio')
->orderBy('id','desc')
->get();*/
/*
//borrar registro
$computer = Computer::find(1);
$computer->delete();
return $computer;*/

}

);

Route::get('/alumno', function() {

/*$alumno = new Alumnos();
$alumno->nombre = 'jesùs';
$alumno->Gènero ='masculino';
$alumno->Edad = 20;
$alumno->published_at='2024-10-27 13:11:00';
$alumno->is_active=true;
$alumno->save();
return $alumno;*/
           /* //SE ACCEDE AL VALOR DE published_at

            $alumno = Alumnos::find(1);
            return $alumno->published_at;*/
            //SE ESTABLECE UN FORMATO PARA EL DESPLIEGUE DE FECHA

$alumno = Alumnos::find(1);

//EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
return $alumno->published_at->format('d-m-Y');
//EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
return $alumno->published_at->diffForHumans();

//AHORA NO DARÁ RESULTADO PORQUE LAS ENTRADAS DE format Y DE diffForHumans DEBEN 
//DE SER VALORES TIMESTAMP

}
);

