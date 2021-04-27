<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class update_pro implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name_t='';
    public $price_pro='';
    public $id_pro='';
    public $images_pro='';
    public $name_pro='';

    public function __construct($name_t,$id_pro,$price_pro,$name_pro,$images_pro)
    {
        $this->name_t=$name_t;
        $this->price_pro=$price_pro;
        $this->id_pro=$id_pro;
        $this->images_pro=$images_pro;
        $this->name_pro=$name_pro;
    }
    public function broadcastOn()
    {
        return new Channel('update_prod');
    }
}
