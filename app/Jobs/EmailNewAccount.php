<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EmailNewAccount implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handle()
    {
        $user = User::where('id',$this->data)->first();
        $expiresAt = now()->addDay();
        $user->sendWelcomeNotification($expiresAt);
    }
}
