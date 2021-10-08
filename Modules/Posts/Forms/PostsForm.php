<?php namespace Modules\Posts\Forms;

use Kris\LaravelFormBuilder\Form;

class PostsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text')
            ->add('slug', 'text',[
                /*'attr'=>['readonly']*/
            ])
            ->add('image', 'file')
            ->add('image_url', 'text',[
                'label' => 'Image URL'
            ])
            ->add('category_id', 'select',[
                'label'=>'Category',
                'empty_value'=>'-- select category --',
                'choices'=>get_post_categories(),
                'attr'=>['required']
            ])
            ->add('status', 'select', [
                'choices' => ['1' => 'live', '0' => 'draft'],
                'empty_value' => '- Select status -',
                'selected'=>1
            ])
            ->add('is_featured', 'select', [
                'label'=>'Feature?',
                'choices' => ['1' => 'yes', '0' => 'no'],
                'selected'=>0
            ])
            /*->add('tags', 'choice',[
                'label'=>'Tags',
                'multiple'=> true,
                'choices' => \Tags::all([],true)->pluck('title', 'id')->all(),
                'empty_value' => '-- select Tags --',
                'attr'=>['class'=>'form-control'],
            ])*/
            ->add('body', 'textarea',[
                'attr'=>['class'=>'summernote form-control','rows'=>6]
            ])
            ->add('meta_title', 'text')
            ->add('meta_keywords', 'textarea',[
                'attr'=>['rows'=>3]
            ])
            ->add('meta_description', 'textarea',[
                'attr'=>['rows'=>6]
            ]);
    }
}
