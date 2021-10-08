<?php

namespace Modules\Countries\Forms;

use Kris\LaravelFormBuilder\Form;

class CountriesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
