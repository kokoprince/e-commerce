<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class remove_pro implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name_t='';
    public $id_pro='';
    public function __construct($name_t,$id_pro)
    {
        $this->name_t=$name_t;
        $this->id_pro=$id_pro;
    }

    public function broadcastOn()
    {
        return new Channel('remove_prod');
    }
}
