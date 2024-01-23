<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
    ];

    protected $hidden = [
        'status',
        'created_at',
        'updated_at',
    ];

    public function characters(){
        return $this->hasMany(Character::class, 'id');
    }
}
