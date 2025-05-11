<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['name', 'description'];

    public function funcionarios()
    {
        return $this->hasMany(Funcionarios::class, 'funcionarios_id', 'id');
    }
}
