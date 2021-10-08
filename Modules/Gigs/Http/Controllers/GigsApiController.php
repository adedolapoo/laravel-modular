<?php namespace Modules\Gigs\Http\Controllers;

use Dingo\Api\Contract\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Gigs\Events\TalentHasApplied;
use Modules\Gigs\Events\TalentHasBeenShortlisted;
use Modules\Gigs\Events\TalentMilestonesSubmission;
use Modules\Gigs\Repositories\GigInterface as Repository;
use Modules\Gigs\Transformers\GigTransformer;
use Modules\Talents\Transformers\TalentTransformer;
use Modules\Users\Repositories\RoleInterface;
use Ramsey\Uuid\Uuid;

class GigsApiController extends BaseApiController
{

    public static $transformer = GigTransformer::class;

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function store()
    {
        try {
            $data = request()->all();
            $data['uuid'] = Uuid::uuid4()->toString();
            $gig = $this->repository->create($data);

            return $this->response->item($gig, $this->getTransformer());
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function show($slug)
    {
        try {

            $gig = $this->repository->getFirstBy('uuid', $slug);

            if (empty($gig)) throw new ModelNotFoundException();

            return $this->response->item($gig, $this->getTransformer());
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function update(RoleInterface $role_repository, $gig_id)
    {
        try {
            $user = $this->auth->user();
            $data = request()->all();
            $data['uuid'] = $gig_id;
            $this->repository->update($data);
            /*$data['user_id'] = $user->id;
            $role = $role_repository->findByName('Business');
            if(!$user->hasRoleId($role->id)) $user->roles()->attach($role->id);*/
            $gig = $this->repository->getFirstBy('uuid', $gig_id);
            return $this->response->item($gig, $this->getTransformer());
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function talents($slug, $talent_id = null)
    {
        try {
            $with = [
                'user',
                'awards',
                'certifications',
                'education',
                'experiences',
                'specialisations',
                'trainings',
                'country',
                'state',
                'lga'
            ];

            $gig = $this->repository->getFirstBy('uuid', $slug);

            if (empty($gig)) throw new ModelNotFoundException();

            if (!empty($talent_id)) {
                $talent = $gig->talents()->where('talent_id', $talent_id)->first();
                if (empty($talent)) throw new ModelNotFoundException();
                return $this->response->item($talent->load($with), new TalentTransformer());
            }

            return $this->response->collection($gig->talents->load($with), $this->getTransformer());
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function talentsUpdate($slug, $talent_id = null)
    {
        try {
            $user = $this->auth->user();
            $talent = $user->talent;
            $data = request()->all();
            $gig = $this->repository->getFirstBy('uuid', $slug, ['business.users']);

            if (empty($talent_id)) {
                if (empty($gig)) throw new ModelNotFoundException();

                $talentAlreadyApplied = $gig->talents()->where('talent_id', $talent->id)->count();
                if ($talentAlreadyApplied) throw new \Exception('You have already applied for this gig');

                $gig->talents()->attach($talent->id, $data);

                event(new TalentHasApplied($user, $gig));

            } else {
                $talent = $gig->talents()->where('talent_id', $talent_id)->first();
                if (empty($talent)) throw new ModelNotFoundException();
                $gig->talents()->updateExistingPivot($talent_id, $data);

                $comments = request('comments');
                if (!empty($comments)) {
                    foreach ($comments as $comment) {
                        if (!isset($comment['id'])) $talent->bid->comments()->create($comment);
                    }
                }

                if (isset($data['status'])) {
                    event(new TalentHasBeenShortlisted($user, $talent->load('user'), $gig));
                }

                if (isset($data['milestones_status'])) {
                    event(new TalentMilestonesSubmission($user, $talent->load('user'), $gig, $data['milestones_status']));
                }
            }

            return $this->response->created();
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

}
