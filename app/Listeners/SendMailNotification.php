<?php

namespace App\Listeners;

use App\Events\CommentCreated;
use App\Jobs\SendEmailJob;

class SendMailNotification
{
    public function handle(CommentCreated $event)
    {
        $post = $event->comment->post;
        $email = $post->author->email;
        $text = 'New comment was added to your post <a href="' .route('post.show', $post->id). '">' . e($post->title) . '</a>';
        $subject = 'New comment was added to your post';

        SendEmailJob::dispatch($email, $text, $subject);
    }
}
