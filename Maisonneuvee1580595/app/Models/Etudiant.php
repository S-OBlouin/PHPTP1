<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'tel',
        'email',
        'ddn',
        'ville_id',
        'created_at',
        'updated_at'
    ];

    public function etudiantHasVille()
    {
        return $this->hasOne('App\Models\Ville', 'id', 'ville_id');
    }
}
