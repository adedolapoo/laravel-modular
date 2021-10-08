<?php


namespace Modules\Talents\Transformers;


use Modules\Core\Transformers\BaseTransformer;

class TalentTransformer extends BaseTransformer
{
    public function transform($talent)
    {
        $talent_array = parent::transform($talent);
        if(!empty($talent->bid->comments)) $talent_array['bid']['comments'] = $talent->bid->comments;
        return $talent_array;
    }
}
