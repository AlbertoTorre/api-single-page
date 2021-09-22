<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'tags',
        'featured'
    ];

    protected $casts = [
        'tags'=> 'object'
    ];

    public function getImageAttribute($value)
    {
        return str_replace('storage/app/public', 'storage', $value);
    }
}
