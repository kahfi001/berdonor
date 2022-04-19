<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // protected $fillable = ['tittle', 'excerpt', 'body'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
