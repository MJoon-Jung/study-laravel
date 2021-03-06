<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LikePost extends Pivot
{
    public $incrementing = true;
    
    protected $fillable = [
        'user_id',
        'post_id',
    ];
    public function posts()
    {
        return $this->belongsTo('App\Domains\Post\Post');
    }
    public function users()
    {
        return $this->belongsTo('App\Domains\User\User');
    }
}
