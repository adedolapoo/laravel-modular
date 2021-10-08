<?php

namespace Modules\Businesses\Forms;

use Kris\LaravelFormBuilder\Form;

class BusinessesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
