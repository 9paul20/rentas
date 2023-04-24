<?php

namespace App\Models\Equipments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 't_disponibilidad';

    protected $primaryKey = 'clvDisponibilidad';

    protected $fillable = [
        'clvDisponibilidad',
        'disponibilidad',
        'descripcion',
        'textColor',
        'bgColorPrimary',
        'bgColorSecondary',
    ];

    protected $hidden = [];

    public static function getRules($clvDisponibilidad = null)
    {
        $rules = [
            'disponibilidad' => 'required|string|min:3|max:255|unique:t_disponibilidad,disponibilidad,' . $clvDisponibilidad . ',clvDisponibilidad',
            'descripcion' => 'string|max:255',
            'textColor' => 'required|string|min:11|max:16',
            'bgColorPrimary' => 'required|string|min:9|max:16',
            'bgColorSecondary' => 'required|string|min:9|max:16',
        ];
        return $rules;
    }
}
