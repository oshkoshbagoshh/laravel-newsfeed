<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    // fillable
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    // relationship to User Model
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    // relationship to Comment Model
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}