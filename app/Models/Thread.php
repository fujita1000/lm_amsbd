<?php

// app/Models/Thread.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['title', 'description'];
    
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function comments()
    {
    return $this->hasMany(Comment::class);
    }
    
}