<?php

namespace Modules\Gigs\Emails;

use Illuminate\Mail\Mailable;

class TalentMilestonesEmail extends Mailable
{

    public $gig;

    public function __construct($gig)
    {
        $this->gig = $gig;
    }

    public function build()
    {
        return $this->view('gigs::emails.talent_milestones_returned_email')
            ->subject('Project plan returned for updates on a gig project on '.config('myapp.website_title'));
    }
}
