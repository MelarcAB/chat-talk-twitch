<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserConfiguration extends Model
{
    use HasFactory;



    //obtener el User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
