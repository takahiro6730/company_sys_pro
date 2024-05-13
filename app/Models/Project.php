<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Project extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'project_manager');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

}
