<?php namespace Modules\Gigs\Events\Handlers;

use Illuminate\Mail\Mailer;
use Modules\Gigs\Emails\BusinessMilestonesEmail;
use Modules\Gigs\Emails\BusinessMilestonesSubmittedEmail;
use Modules\Gigs\Emails\TalentMilestonesEmail;
use Modules\Gigs\Emails\TalentShortlistedEmail;
use Modules\Gigs\Events\TalentMilestonesSubmission;

class SendMilestonesSubmissionNotification
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

    public function handle(TalentMilestonesSubmission $event)
    {
        $user = $event->user;
        $gig = $event->gig;
        $talent = $event->talent;
        $milestone_status = $event->milestone_status;

        //talent has submitted
        if($milestone_status == 1){
            if(!empty($gig->business->users)){
                $this->mail
                    ->to($gig->business->users()->first()->email)
                    ->send(new BusinessMilestonesEmail($gig,$user));
            }
        }else{
            if (!empty($talent->user->email)){
                $this->mail
                    ->to($talent->user->email)
                    ->send(new TalentMilestonesEmail($gig));
            }
        }

        /* if(!empty($gig->business->users)){
             $this->mail->to($gig->business->users()->first()->email)->send(new BusinessApplyEmail($gig));
         }*/
    }
}
