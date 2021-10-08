<?php namespace Modules\Gigs\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Gigs\Events\Handlers\SendApplyNotification;
use Modules\Gigs\Events\Handlers\SendMilestonesSubmissionNotification;
use Modules\Gigs\Events\Handlers\SendShortlistedNotification;
use Modules\Gigs\Events\TalentHasApplied;
use Modules\Gigs\Events\TalentHasBeenShortlisted;
use Modules\Gigs\Events\TalentMilestonesSubmission;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TalentHasApplied::class => [
            SendApplyNotification::class,
        ],
        TalentHasBeenShortlisted::class => [
            SendShortlistedNotification::class,
        ],
        TalentMilestonesSubmission::class => [
            SendMilestonesSubmissionNotification::class,
        ],
    ];
}
