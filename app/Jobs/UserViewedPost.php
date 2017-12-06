<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\{User, Post};

class UserViewedPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    public $user;
    public $post;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // this user has already viewed this post
        if($this->user->viewedPosts->contains($this->post)) {
            $this->user->viewedPosts->where('id', $this->post->id)
                                    ->first()
                                    ->pivot
                                    ->increment('count');

            return;
        }

        // this user is viewing this post for the first time 
        $this->user->viewedPosts()->attach($this->post, [
            'count' => 1
        ]);
    }
}
