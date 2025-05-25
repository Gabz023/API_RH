<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = ["name", "email", "age", "cpf", "departamento_id"];

    public function departamentos()
    {
        return $this->belongsTo(Departamentos::class, "departamento_id");
    }
}
