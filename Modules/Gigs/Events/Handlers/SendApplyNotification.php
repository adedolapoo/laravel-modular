<?php namespace Modules\Gigs\Events\Handlers;

use Illuminate\Mail\Mailer;
use Modules\Gigs\Emails\BusinessApplyEmail;
use Modules\Gigs\Emails\TalentApplyEmail;
use Modules\Gigs\Events\TalentHasApplied;

class SendApplyNotification
{
    /**
     * @var Mailer
     */
    private $mail;

    /**
     * @param Mailer $mail
     */
    public function __construct(Mailer $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param TalentHasApplied $event
     */
    public function handle(TalentHasApplied $event)
    {
        $user = $event->user;
        $gig = $event->gig;

        $this->mail->to($user->email)->send(new TalentApplyEmail($gig));

        if(!empty($gig->business->users)){
            $this->mail->to($gig->business->users()->first()->email)->send(new BusinessApplyEmail($gig));
        }
    }
}
