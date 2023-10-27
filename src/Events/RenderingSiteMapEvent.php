<?php

namespace Grilar\Theme\Events;

use Grilar\Base\Events\Event;

class RenderingSiteMapEvent extends Event
{
    public function __construct(public string|null $key = null)
    {
    }
}
