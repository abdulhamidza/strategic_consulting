<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    public function consultantId()
    {
        return $this->belongsTo(Consultant::class, 'consultant_id');
    }

    public function userId()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
