<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'client_name',
        'client_email',
        'client_phone',
        'event_date',
        'event_type_id',
        'guest_count',
        'message',
        'status',
    ];

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }
}
