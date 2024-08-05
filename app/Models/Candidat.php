<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{ 
    use HasFactory;
    
    protected $table = 'candidats';
    protected $fillable = ['candidat_id','parti_politique_id'];
    //protected $guarded = [];


// Relation avec les votes
public function votes()
{
    return $this->hasMany(Vote::class);
}
}
