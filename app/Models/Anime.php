<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    
    public $fillable = [
        'name','description','animeCover','animeBackground','confirmation'
    ];

    public function scopeFilter($query) {
        if(request('search') !== null){
            $query->where('name', 'LIKE', '%'.request('search').'%');
        }
        
    }

    public function ep() {
        return $this->hasMany(Ep::class);
    }
}