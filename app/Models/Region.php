<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Region extends Model {
    // Relationships or additional details if needed
    
    
        use HasFactory;
        
        protected $table = 'regions';
        protected $fillable = ['region_id'];
    
        // Relation avec les départements
        public function departements()
        {
            return $this->hasMany(Departement::class);
        }
}


