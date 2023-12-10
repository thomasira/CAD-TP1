<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cad1Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'phone',
        'email',
        'date_naissance',
        'ville_id'
    ];

    public function etudiantHasVille() {
        return $this->hasOne('App\Models\Cad1Ville', 'id', 'ville_id');
    }
}

