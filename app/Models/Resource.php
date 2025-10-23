<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Resource extends Model
{
    use HasFactory;
    protected $table = 'resources';
    protected $fillable = [
     'topic','image','description', 'user_id', 'comment_id'
    ];


    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id')->whereNull('parent_id');
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class, 'post_id');
    }

}
