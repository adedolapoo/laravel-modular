<?php

namespace Modules\Posts\Forms;

use Kris\LaravelFormBuilder\Form;

class PostCategoriesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('category', 'text',[
                'label'=>'Category'
            ])
            ->add('image', 'file')
            ->add('description', 'textarea',[
                'attr'=>['class'=>'wysihtml5 form-control','rows'=>6]
            ]);
    }
}
