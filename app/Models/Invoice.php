<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Unit;
use App\Models\Payment;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
        'client_info',
        'amount',
        'unit_id',
        'project_name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
