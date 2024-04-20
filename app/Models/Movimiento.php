<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Movimiento extends Model
{
    use HasFactory;

    protected $table = 'movimientos';

    protected $fillable = [
        'tipo',
        'monto',
        'fecha',
        'usuario_id',
    ];

    public static function rules()
    {
        return [
            'tipo' => [
                'required',
                Rule::in(['DEPOSITO', 'RETIRO']),
            ],
            'monto' => 'required|numeric',
            'fecha' => 'required|date',
            'usuario_id' => 'required|exists:usuarios,id',
        ];
    }
}
