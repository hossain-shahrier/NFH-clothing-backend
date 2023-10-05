<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'caption',
        'image_paths',
        'video_paths',
        'product_id',
    ];

    protected $casts = [
        'image_paths' => 'json',
        'video_paths' => 'json',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
