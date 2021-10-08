<?php

namespace Modules\Specialisations\Forms;

use Kris\LaravelFormBuilder\Form;

class SpecialisationsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
