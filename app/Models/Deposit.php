<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

use App\Models\Unit;
use App\Models\Payment;

class Deposit extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'register_user');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}