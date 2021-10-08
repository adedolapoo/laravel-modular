<?php namespace Modules\Posts\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Maatwebsite\Sidebar\Domain\Events\FlushesSidebarCache;
use Modules\Posts\Events\Handlers\UpdatePostViewCount;
use Modules\Posts\Events\PostWasViewed;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        PostWasViewed::class => [
            UpdatePostViewCount::class,
        ]
    ];
}
