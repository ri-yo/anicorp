<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ep extends Model
{
    use HasFactory;
    protected $fillable = ['name','ep','watch','confirmation'];

    public function anime() {
        return $this->belongsTo(Anime::class);
    }
}
