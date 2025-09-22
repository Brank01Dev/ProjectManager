<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project'; 
 
    protected $fillable = [
        'name',
        'description',
        'status',
        'project_creator',
        'date_of_start',
        'date_of_end'
    ];
}