<?php


namespace Modules\Gigs\Transformers;


use Modules\Core\Transformers\BaseTransformer;

class GigTransformer extends BaseTransformer
{
    public function transform($gig)
    {
        $gig_array = parent::transform($gig);
        $talent_id = request()->get('talent_id');
        $business_id = request()->get('business_id');
        if (!empty($talent_id)) {
            $talent = $gig->talents()->where('talent_id', $talent_id)->first();
            $bid_array = [];
            if (!empty($talent)) {
                $bid = $talent->bid;
                $bid_array = [
                    'brief' => $bid->brief,
                    'estimatedHours' => $bid->estimated_hours,
                    'status' => $bid->status,
                    'milestones' => $bid->milestones,
                    'milestonesStatus' => $bid->milestones_status,
                    'comments' => $bid->comments
                ];
            }
            return $gig_array + ['bid' => $bid_array];
        }
        if (!empty($business_id)) {
            if (!empty($gig->talents)) {
                return $gig_array + ['talentCount' => [
                        'applied' => $gig->talents->count(),
                        'shortlisted' => $gig->talents()->where('gig_talent.status', 10)->count(),
                        'engaged' => $gig->talents()->where('gig_talent.status', 1)->count()
                    ]];
            }
        }
        return $gig_array;
    }
}
