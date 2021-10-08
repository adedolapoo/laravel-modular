<?php

namespace Modules\Talents\Forms;

use Kris\LaravelFormBuilder\Form;

class TalentsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
