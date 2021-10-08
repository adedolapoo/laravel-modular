<?php namespace Modules\Posts\Events;

class PostWasViewed
{
    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }
}
