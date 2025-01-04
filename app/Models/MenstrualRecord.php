<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenstrualRecord extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'condition', 'menstruation_status', 'mood', 'body_condition', 'menstrual_flow', 'memo', 'date' ];
    protected $casts = [ 'body_condition' => 'array', ];
}
