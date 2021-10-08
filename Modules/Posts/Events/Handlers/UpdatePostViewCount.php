<?php namespace Modules\Posts\Events\Handlers;

use Illuminate\Mail\Message;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Mail;
use Modules\Posts\Events\PostWasViewed;
use Modules\Posts\Repositories\PostInterface;
use Modules\Users\Events\UserHasBegunResetProcess;

class UpdatePostViewCount
{
    /**
     * @var PostInterface
     */
    private $post;
    /**
     * @var Store
     */
    private $session;

    public function __construct(PostInterface $post, Store $session)
    {
        $this->post = $post;
        $this->session = $session;
    }

    public function handle(PostWasViewed $event)
    {
        $post = $event->post;

        if (!$this->hasViewedPost($post)) {

            $post = $this->post->incrementViews($post);

            $this->storeViewedPost($post);
        }

    }

    /**
     * @param $post
     * @return bool
     */
    protected function hasViewedPost($post)
    {
        return array_key_exists($post->id, $this->getViewedPost());
    }

    /**
     * Get the users viewed post from the session.
     *
     * @return array
     */
    protected function getViewedPost()
    {
        return $this->session->get('viewed_posts', array());
    }

    /**
     * Append the newly viewed post to the session.
     *
     * @param $post
     * @return void
     */
    protected function storeViewedPost($post)
    {
        $key = 'viewed_posts.' . $post->id;

        $this->session->put($key, time());
    }
}
