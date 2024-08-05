<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $table = 'votes';
    protected $fillable = ['bureau_vote_id', 'candidat_id', 'vote_id'];

    // Relation avec le bureau de vote
    public function bureauVote()
    {
        return $this->belongsTo(BureauVote::class);
    }

    // Relation avec le candidat
    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
