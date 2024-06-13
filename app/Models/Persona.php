<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Persona extends Model
{
    use HasFactory;

    public function accidentes(): BelongsToMany
    {
        return $this->belongsToMany(Accidente::class);
    }
}
