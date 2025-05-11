<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Funcionarios;
use App\Models\Departamentos;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Funcionários

Route::post('/funcionarios', function (Request $request){
    $funcionarios = new Funcionarios();

    $funcionarios->name = $request->input("name");
    $funcionarios->age = $request->input("age");
    $funcionarios->cpf = $request->input("cpf");
    $funcionarios->number = $request->input("number");
    $funcionarios->address = $request->input("address");


    $funcionarios->save();
    return response()->json($funcionarios);
});

Route::get('/funcionarios', function (){
    $funcionarios = Funcionarios::all();

    return response()->json($funcionarios);
});

Route::get('/funcionarios/{id}', function($id){
    $funcionarios = Funcionarios::find($id);

    return response()->json($funcionarios);
});

Route::patch('/funcionarios/{id}', function(Request $request, $id){
    $funcionarios = Funcionarios::find($id);

    if($request->input('name') !== null)
    {
        $funcionarios->name = $request->input("name");
    }

    if($request->input('age') !== null)
    {
        $funcionarios->age = $request->input("age");
    }

    if($request->input('cpf') !== null)
    {
        $funcionarios->cpf = $request->input("cpf");
    }

    if($request->input('number') !== null)
    {
        $funcionarios->number = $request->input("number");
    }

    if($request->input('address') !== null)
    {
        $funcionarios->address = $request->input("address");
    }

    $funcionarios->save();
    return response()->json($funcionarios);
});

Route::delete('/funcionarios/{id}', function($id){
    $funcionarios = Funcionarios::find($id);

    $funcionarios->delete();
    return response()->json($funcionarios);
});

//Departamentos

Route::post('/departamentos', function (Request $request){
    $departamentos = new Departamentos();

    $departamentos->name = $request->input("name");
    $departamentos->description = $request->input("description");

    $departamentos->save();
    return response()->json($departamentos);
});

Route::get('/departamentos', function(){
    $departamentos = Departamentos::all();

    return response()->json($departamentos);
});

Route::get('/departamentos/{id}', function($id){
    $departamentos = Funcionarios::find($id);

    return response()->json($departamentos);
});

Route::patch('/departamentos/{id}', function(Request $request, $id){
    $departamentos = Departametos::find($id);

    if($request->input('name') !== null)
    {
        $departamentos->name = $request->input("name");
    }

    if($request->input('description') !== null)
    {
        $departamentos->description = $request->input("description");
    }

    $departamentos->save();
    return response()->json($departamentos);
});

Route::delete('/departamentos/{id}', function($id){
    $departamentos = Departamentos::find($id);

    $departamentos->delete();
    return response()->json($departamentos);
});
