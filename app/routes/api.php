<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Funcionarios;
use App\Models\Departamentos;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

#Departamentos
Route::get('/departamentos', function () {
    $departamento = Departamentos::all();

    return response()->json($departamento);
});

Route::post('/departamentos', function (Request $request) {
    $departamento = new Departamentos();

    $departamento->name = $request->input("name");
    $departamento->description = $request->input("description");

    $departamento->save();
    return response()->json($departamento);
});

Route::get('/departamentos/{id}', function ($id) {
    $departamento = Departamentos::find($id);

    return response()->json($departamento);
});

Route::patch('/departamentos/{id}', function (Request $request, $id) {
    $departamento = Departamentos::find($id);

    if($request->input("name") !== null)
    {
        $departamento->name = $request->input("name");
    }
    if($request->input("description") !== null)
    {
        $departamento->description = $request->input("description");
    }

    $departamento->save();
    return response()->json($departamento);
});

Route::delete('/departamentos/{id}', function ($id) {
    $departamento = Departamentos::find($id);

    $departamento->delete();

    return response()->json($departamento);
});


#Funcionarios
Route::get('/funcionarios', function () {
    $funcionario = Funcionarios::all();

    return response()->json($funcionario);
});

Route::post('/funcionarios', function (Request $request) {
    $funcionario = new Funcionarios();

    $funcionario->name = $request->input("name");
    $funcionario->email = $request->input("email");
    $funcionario->age = $request->input("age");
    $funcionario->cpf = $request->input("cpf");
    $funcionario->departamento_id = $request->input("departamento_id");

    $funcionario->save();
    return response()->json($funcionario);
});

Route::get('/funcionarios/{id}', function ($id) {
    $funcionario = Funcionarios::find($id);

    return response()->json($funcionario);
});

Route::patch('/funcionarios/{id}', function (Request $request, $id) {
    $funcionario = Funcionarios::find($id);

    if($request->input("name") !== null)
    {
        $funcionario->name = $request->input("name");
    }
    if($request->input("email") !== null)
    {
        $funcionario->email = $request->input("email");
    }
    if($request->input("age") !== null)
    {
        $funcionario->age = $request->input("age");
    }
    if($request->input("cpf") !== null)
    {
        $funcionario->cpf = $request->input("cpf");
    }
    if($request->input("departamento_id") !== null)
    {
        $funcionario->departamento_id = $request->input("departamento_id");
    }

    $funcionario->save();
    return response()->json($funcionario);
});

Route::delete('/funcionarios/{id}', function ($id) {
    $funcionario = Funcionarios::find($id);

    $funcionario->delete();

    return response()->json($funcionario);
});


#Relacionamentos
Route::get("/funcionarios-departamentos", function () {
    $funcionario = Funcionarios::with('departamentos')->get();

    return response()->json($funcionario);
});

Route::get("/departamentos-funcionarios", function () {
    $departamento = Departamentos::with('funcionarios')->get();

    return response()->json($departamento);
});

Route::get("/funcionarios/{id}/departamentos", function ($id) {
    $funcionario = Funcionarios::with('departamentos')->find($id);

    return response()->json($funcionario->departamentos);
});

Route::get("/departamentos/{id}/funcionarios", function ($id) {
    $departamento = Departamentos::with('funcionarios')->find($id);

    return response()->json($departamento->funcionarios);
});
