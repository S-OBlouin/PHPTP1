<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'created_at',
        'updated_at'
    ];

    public function villeHasEtudiant()
    {
        return $this->hasMany('App\Models\Etudiant', 'id', 'ville_id');
    }
}
