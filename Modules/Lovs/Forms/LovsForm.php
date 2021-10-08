<?php

namespace Modules\Lovs\Forms;

use Kris\LaravelFormBuilder\Form;

class LovsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('type', 'select', [
                'choices' => [
                    'disciplines' => 'Disciplines',
                    'experience-levels' => 'Experience Levels',
                    'currencies' => 'Currencies',
                    'industries' => 'Industries',
                    'experience-grades' => 'Experience Grades',
                    'degrees' => 'Degrees',
                    'grades' => 'Grades',
                    'courses' => 'Courses',
                    'institutions' => 'Institutions',
                    'employers' => 'Employers',
                    'skills' => 'Skills'
                ],
                'empty_value' => '- Select Type -',
                'selected'=>1
            ])
            ->add('name', 'text');
    }
}
