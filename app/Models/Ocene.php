<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocene extends Model
{
    use HasFactory;

    protected $table = 'ocenes';

    protected $fillable = [
        "user_id", "predmet", "ocena", "profesor"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
