<?php

namespace App\Models;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id',
        'reply_count',
        'view_count',
        'last_reply_user_id',
        'order',
        'excerpt',
        'slug'
    ];

    /* Eloquent Relationships */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
