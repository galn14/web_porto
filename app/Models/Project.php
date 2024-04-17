<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project'; // Ensure this is explicitly set
    protected $casts = [
        'start_date' => 'date',  // Ensuring it's treated as a date
        'end_date' => 'date',    // Add this if you have an end date
    ];
    protected $fillable = [
        'title',
        'company',
        'type',
        'start_date',
        'end_date',
        'description',
        'image'
    ];
}
