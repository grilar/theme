<?php

namespace Grilar\Theme\Events;

use Grilar\Base\Events\Event;
use Grilar\Slug\Models\Slug;
use Illuminate\Queue\SerializesModels;

class RenderingSingleEvent extends Event
{
    use SerializesModels;

    public function __construct(public Slug $slug)
    {
    }
}
