<?php

return [
	'name' => 'Gigs',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['title','status'],
	'columns'=>[
            ['data'=>'title','name'=>'title'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Gigs\Forms\GigsForm',
	'permissions'=>[
		'gigs' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]

];
