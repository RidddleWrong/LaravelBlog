<?php

namespace App\Observers;

use App\Jobs\SendEmailJob;
use App\Models\Comment;

class CommentObserver
{
    /**
     * Handle the Comment "created" event.
     *
     * @param Comment $comment
     * @return void
     */
    public function created(Comment $comment)
    {
        $post = $comment->post;
        $email = $post->author->email;
        $text = 'New comment was added to your post <a href="' .route('post.show', $post->id). '">' . e($post->title) . '</a>';
        $subject = 'New comment was added to your post';
        // qweqweqweqweqwe
        SendEmailJob::dispatch($email, $text, $subject);
    }
}
