<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class list_ms implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $check='';
    public function __construct($check)
    {
        $this->check=$check;
    }
    public function broadcastOn()
    {
        return new Channel('list_mss');
    }
}
