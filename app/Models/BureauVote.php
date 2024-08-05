<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 


class BureauVote extends Model 
    
    {
        use HasFactory;

        protected $table = 'bureau_votes';
        protected $fillable = ['bureau_vote_id', 'centre_vote_id'];
    
        // Relation avec le centre de vote
        public function centreVote()
        {
            return $this->belongsTo(CentreVote::class);
        }
    
        // Relation avec les votes
        public function votes()
        {
            return $this->hasMany(Vote::class);
        }
    }



   

