<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NbreVoix extends Model
{
    use HasFactory;
    protected $table = 'nbre_voixes';
    protected $fillable = ['candidat_id', 'vote_id','bureau_vote_id','centre_id','commune_id','departement_id','region_id'];
}
