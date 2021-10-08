<?php namespace Modules\Gigs\Events;

class TalentHasBeenShortlisted
{
    public $user;
    public $gig;
    public $talent;

    public function __construct($user,$talent,$gig)
    {
        $this->user = $user;
        $this->gig = $gig;
        $this->talent = $talent;
    }
}
