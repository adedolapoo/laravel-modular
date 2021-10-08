<?php

return [
	'name' => 'Posts',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['title','slug','category','Author','status'],
	'columns'=>[
            ['data'=>'title','name'=>'title'],
            ['data'=>'slug','name'=>'slug'],
            ['data'=>'category','name'=>'category'],
            ['data'=>'email','name'=>'email'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Posts\Forms\PostsForm',
    'permissions'=>[
        'posts' => [
            'index',
            'create',
            'store',
            'edit',
            'update',
            'destroy',
        ],
        'post.categories' => [
            'index',
            'create',
            'store',
            'edit',
            'update',
            'destroy',
        ],
    ]
];
