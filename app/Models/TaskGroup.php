<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function isCompleted()
    {
        foreach ($this->tasks as $task) {
            if ($task->completed === false) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the owner of the task group.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the tasks of the task group.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
