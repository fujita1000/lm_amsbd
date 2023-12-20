<?php

// app/Models/Comment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'comment'];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}