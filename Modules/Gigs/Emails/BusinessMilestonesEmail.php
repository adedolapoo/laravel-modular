<?php

namespace Modules\Gigs\Emails;

use Illuminate\Mail\Mailable;

class BusinessMilestonesEmail extends Mailable
{

    public $gig;
    public $user;

    public function __construct($gig,$user)
    {
        $this->gig = $gig;
        $this->user = $user;
    }

    public function build()
    {
        $talent_name = $this->user->present()->fullName();
        return $this->view('gigs::emails.business_milestones_submitted_email')
            ->subject($talent_name.' submitted project plan for your gig project on '.config('myapp.website_title'));
    }
}
