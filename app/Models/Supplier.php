<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = [
        'type',
        'name_reason',
        'cpf_cnpj',
        'phone',
    ];
    public function getTypeDescriptionAttribute()
{
    return match ($this->type) {
        'F' => 'Pessoa Física',
        'J' => 'Pessoa Jurídica',
        default => 'Desconhecido',
    };
}
}
