<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Matricula extends Model
{
    use HasFactory;

    protected $table = 'matriculas';

    public function curso(): BelongsTo
    {
        return $this->belongsTo(curso::class, 'curso_id');
    }
}
