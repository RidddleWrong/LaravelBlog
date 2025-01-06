<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $email;
    private $text;
    private $subject;

    /**
     * Create a new job instance.
     * @param $email
     * @param $text
     * @param $subject
     */
    public function __construct($email, $text, $subject)
    {
        $this->email = $email;
        $this->text = $text;
        $this->subject = $subject;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::to($this->email)->send(new SendMail($this->text, $this->subject));
        \Log::info('$send email job');
    }
}
