<?php

namespace App\Observers;

use App\Models\Post;
use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param Post $post
     * @return void
     * @throws TelegramSDKException
     */
    public function created(Post $post) // telegram notifications
    {
        if (config('telegram.bots.LaravelBlogBot.enable')) {
            $telegram = new Api(config('telegram.bots.LaravelBlogBot.token'));
            $text = 'New post with name "' . $post->title . '" was created';

            $telegram->sendMessage([
                'chat_id' => config('telegram.bots.LaravelBlogBot.chat_id'),
                'text' => $text,
            ]);
        }
    }
}
