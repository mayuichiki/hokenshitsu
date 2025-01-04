<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenstrualData extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'cycle_start_date', 'cycle_end_date', 'symptoms', 'notes',
    ];

    protected $casts = [
        'symptoms' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
