<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory;

    protected $table = "feedback";
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [
        'id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
