<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class who_do_order implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $case='';

    public function __construct($case)
    {
            $this->case=$case;
    }

    public function broadcastOn()
    {
        return new Channel('who_do_orde');
    }
}
