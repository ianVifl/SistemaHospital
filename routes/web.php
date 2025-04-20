<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Defunciones;
use App\Http\Controllers\DoctoresGenerales;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Usuarios;
use Illuminate\Support\Facades\Route;

//crear un usuario admin, solo usar una vez 
Route::get('/crear-admin',[AuthController::class,'crearAdmin']);


Route::get('/',[AuthController::class, 'index'])-> name ('login');

Route::post('/logear', [AuthController::class, 'logear'])->name('logear');


Route::middleware("auth")->group(function(){
    Route::get('/home',[Dashboard::class, 'index'])-> name ('home');
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
});
//Route::get('/home',[Dashboard::class, 'index'])-> name ('home');

Route::prefix('defunciones')->middleware("auth")->group(function(){
    Route::get('/registro-defuncion',[Defunciones::class,'index'])-> name('defuncion-registro');
    Route::get('/create',[Defunciones::class,'create'])-> name('defunciones.create');
    Route::post('/store',[Defunciones::class,'store'])->name('defunciones.store');
    Route::get('/show/{id}',[Defunciones::class,'show'])->name('defunciones.show');
    //ruta para eliminaciones 
    Route::delete('/destroy/{id}',[Defunciones::class,'destroy'])->name('defunciones.destroy');
    //ruta para actualizar/editar
    Route::get('/edit/{id}',[Defunciones::class,'edit'])->name('defunciones.edit');
    //ruta para mandar la actualizacion a base de datos
    Route::put('/update/{id}',[Defunciones::class,'update'])->name('defunciones.update');

    Route::post('/generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generate.pdf');
});

Route::prefix('doctoresGenerales')->middleware("auth")->group(function(){
    Route::get('/doctores-generales',[DoctoresGenerales::class,'index'])-> name('doctores-generales');
});


Route::prefix('usuarios')->middleware("auth")->group(function(){
    Route::get('/usuarios',[Usuarios::class,'index'])-> name('usuarios');
});

