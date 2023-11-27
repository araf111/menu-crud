<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';

    protected $fillable = [
        'organization_id',
        'name',
        'name_bn',
        'title',
        'subtitle',
        'description',
        'status',
        'image_one',
        'image_two'
    ];

    // public function organize(){
    //     return $this->hasOne(Master::class, 'id', 'organization_id');
    // }
}
