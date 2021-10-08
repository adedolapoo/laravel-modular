<?php

namespace Modules\Referrals\Forms;

use Kris\LaravelFormBuilder\Form;

class ReferralsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
