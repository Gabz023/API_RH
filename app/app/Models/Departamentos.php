<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $fillable = ["name", "description"];

    public function funcionarios()
    {
        return $this->hasMany(Funcionarios::class, "departamento_id");
    }
}
