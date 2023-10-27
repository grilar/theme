<?php

namespace Grilar\Theme\Events;

use Grilar\Base\Events\Event;
use Illuminate\Queue\SerializesModels;

class RenderingHomePageEvent extends Event
{
    use SerializesModels;
}
