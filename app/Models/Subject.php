<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table ='subjects';
    protected $fillable = [
        'area_id',
        'level_id',
        'code',
        'name',
        'school_name',
        'mangment_name',
        'national_number',
        'arabic',
        'english',
        'social',
        'algebra',
        'engineer',
        'math',
        'science',
        'total',
        'religin',
        'art',
        'computer',
        'sport',
        'status'
    ];
}
