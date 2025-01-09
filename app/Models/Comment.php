<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    // fillable
    protected $fillable = [
        'content',
        'user_id',
        'post_id'
    ];

    // relationship to User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    // relationship to Posts
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}