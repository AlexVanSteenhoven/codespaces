<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Task
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $status
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Comment> $comments
 * @property-read int|null $comments_count
 * @property-read User $user
 * @method static Builder|Task newModelQuery()
 * @method static Builder|Task newQuery()
 * @method static Builder|Task query()
 * @method static Builder|Task whereCreatedAt($value)
 * @method static Builder|Task whereDescription($value)
 * @method static Builder|Task whereId($value)
 * @method static Builder|Task whereStatus($value)
 * @method static Builder|Task whereTitle($value)
 * @method static Builder|Task whereUpdatedAt($value)
 * @method static Builder|Task whereUserId($value)
 * @mixin Eloquent
 */
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
