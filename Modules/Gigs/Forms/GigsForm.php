<?php

namespace Modules\Gigs\Forms;

use Kris\LaravelFormBuilder\Form;

class GigsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
