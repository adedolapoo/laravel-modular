<?php

namespace Modules\Gigs\Emails;

use Illuminate\Mail\Mailable;

class TalentApplyEmail extends Mailable
{

    public $gig;

    public function __construct($gig)
    {
        $this->gig = $gig;
    }

    public function build()
    {
        return $this->view('gigs::emails.talent_apply_email')
            ->subject('You applied for a gig project on Mactay Gigs');
    }
}
