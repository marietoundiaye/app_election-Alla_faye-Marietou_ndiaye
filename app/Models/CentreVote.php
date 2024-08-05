<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class CentreVote extends Model {
    use HasFactory;
    
    protected $table = 'centre_votes';
    protected $fillable = ['centre_vote_id', 'commune_id'];

    // Relation avec la commune
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    // Relation avec les bureaux de vote
    public function bureauxVote()
    {
        return $this->hasMany(BureauVote::class);
    }
}

   

