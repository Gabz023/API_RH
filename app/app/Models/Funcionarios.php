<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $table = 'funcionarios';
    protected $fillable = ['name', 'age', 'cpf', 'number', 'address', 'departamentos_id'];

    public function departamentos()
    {
        return $this->belongsTo(Departamentos::class, 'departamnetos_id', 'id');
    }
}
