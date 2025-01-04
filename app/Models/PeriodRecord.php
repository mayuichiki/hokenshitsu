<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodRecord extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'date', 'menstruation', 'ovulation', 'symptoms'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
