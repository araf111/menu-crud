<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuOne extends Model
{
    use HasFactory;
    protected $table = 'sub_menu_ones';

    protected $fillable = [
        'menu_id',
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
