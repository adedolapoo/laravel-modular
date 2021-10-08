<?php namespace Modules\Gigs\Events\Handlers;

use Illuminate\Mail\Mailer;
use Modules\Gigs\Emails\TalentShortlistedEmail;
use Modules\Gigs\Events\TalentHasBeenShortlisted;

class SendShortlistedNotification
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

    public function handle(TalentHasBeenShortlisted $event)
    {
        $user = $event->user;
        $gig = $event->gig;
        $talent = $event->talent;

        if (!empty($talent->user->email)){
            $this->mail->to($talent->user->email)->send(new TalentShortlistedEmail($gig));
        }

        /* if(!empty($gig->business->users)){
             $this->mail->to($gig->business->users()->first()->email)->send(new BusinessApplyEmail($gig));
         }*/
    }
}
