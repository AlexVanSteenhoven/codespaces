<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    const STATUS_CREATED = 'created';
    const STATUS_IN_PROGRESS = 'in progress';
    const STATUS_IN_REVIEW = 'in review';
    const STATUS_TESTING = 'testing';
    const STATUS_DONE = 'done';


    protected $table = 'tasks';
    protected $fillable = ['title', 'description', 'user_id', 'status_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
