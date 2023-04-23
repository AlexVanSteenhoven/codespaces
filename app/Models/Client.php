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
 * App\Models\Client
 *
 * @property int $id
 * @property string $name
 * @property string $company
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Comment> $comments
 * @property-read int|null $comments_count
 * @property-read Collection<int, Project> $projects
 * @property-read int|null $projects_count
 * @property-read Collection<int, Task> $tasks
 * @property-read int|null $tasks_count
 * @property-read User|null $user
 * @method static Builder|Client newModelQuery()
 * @method static Builder|Client newQuery()
 * @method static Builder|Client query()
 * @method static Builder|Client whereAddress($value)
 * @method static Builder|Client whereCompany($value)
 * @method static Builder|Client whereCreatedAt($value)
 * @method static Builder|Client whereEmail($value)
 * @method static Builder|Client whereId($value)
 * @method static Builder|Client whereName($value)
 * @method static Builder|Client wherePhone($value)
 * @method static Builder|Client whereStatus($value)
 * @method static Builder|Client whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = ['name', 'company', 'email', 'phone', 'address'];

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
