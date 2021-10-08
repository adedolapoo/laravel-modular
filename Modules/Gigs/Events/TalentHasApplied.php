<?php namespace Modules\Gigs\Events;

class TalentHasApplied
{
    public $user;
    public $gig;

    public function __construct($user,$gig)
    {
        $this->user = $user;
        $this->gig = $gig;
    }
}
