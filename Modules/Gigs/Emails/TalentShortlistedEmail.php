<?php

namespace Modules\Gigs\Emails;

use Illuminate\Mail\Mailable;

class TalentShortlistedEmail extends Mailable
{

    public $gig;

    public function __construct($gig)
    {
        $this->gig = $gig;
    }

    public function build()
    {
        return $this->view('gigs::emails.talent_shortlisted_email')
            ->subject('You have been shortlisted for a gig project on Mactay Gigs');
    }
}
