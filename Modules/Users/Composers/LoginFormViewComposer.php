<?php namespace Modules\Users\Composers;

use Kris\LaravelFormBuilder\FormBuilderTrait;

class LoginFormViewComposer
{
    use FormBuilderTrait;

    public function compose($view)
    {
        $view->login_form = $this->form('Users\Forms\AuthForm', [
            'method' => 'POST',
            'route' => 'login.post'
        ]);
    }
}
