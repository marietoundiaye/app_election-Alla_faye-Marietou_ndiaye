<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model {
    use HasFactory;
    protected $table = 'communes';
    protected $fillable = ['commune_id', 'departement_id'];

    // Relation avec le département
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    // Relation avec les centres de vote
    public function centresVote()
    {
        return $this->hasMany(CentreVote::class);
    }
}


