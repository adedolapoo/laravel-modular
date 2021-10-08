<?php

namespace Modules\Lcds\Forms;

use Kris\LaravelFormBuilder\Form;

class LcdsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
