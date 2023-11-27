<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuTwo extends Model
{
    use HasFactory;

    protected $table = 'sub_menu_twos';
    protected $fillable = [
        'menu_id',
        'sub_menu_one_id',
        'name',
        'name_bn',
        'title',
        'subtitle',
        'description',
        'status',
        'image_one',
        'image_two'
    ];
}
