<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Post extends Model
{
    protected $fillable = [
        'title', 'content',
    ];

    public function viewedUsers()
    {
        return $this->belongsToMany(User::class, 'user_post_views')
                    ->withTimestamps()
                    ->withPivot(['count']); 
    }

    public function views()
    {
    	//return array_sum($this->viewedUsers->pluck('pivot.count')->toArray());
        dd($this->viewedUsers->pluck('pivot.count'));
    }
}
