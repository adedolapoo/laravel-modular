<?php namespace Modules\Gigs\Events;

class TalentMilestonesSubmission
{
    public $user;
    public $gig;
    public $talent;
    public $milestone_status;

    public function __construct($user,$talent,$gig,$milestone_status)
    {
        $this->user = $user;
        $this->gig = $gig;
        $this->talent = $talent;
        $this->milestone_status = $milestone_status;
    }
}
