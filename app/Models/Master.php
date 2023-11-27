<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $table =  'masters';

    protected $fillable = [
        'eng_name',
        'bng_name',
        'email',
        'mobile',
        'title',
        'subtitle',
        'description',
        'footer_one',
        'footer_two',
        'status',
        'image_one',
        'image_two'
    ];
}
