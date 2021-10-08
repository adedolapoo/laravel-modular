<?php

namespace Modules\Gigs\Emails;

use Illuminate\Mail\Mailable;

class BusinessApplyEmail extends Mailable
{

    public $gig;

    public function __construct($gig)
    {
        $this->gig = $gig;
    }

    public function build()
    {
        return $this->view('gigs::emails.business_apply_email')
            ->subject('You have a new application a gig project on Mactay Gigs');
    }
}
