<?php

namespace Modules\States\Forms;

use Kris\LaravelFormBuilder\Form;

class StatesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
