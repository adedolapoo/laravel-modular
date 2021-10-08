<?php

return [
	'name' => 'Lcds',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 4,
		'icon' => 'fa fa-file',
	],
	'th' => ['title','status'],
	'columns'=>[
            ['data'=>'title','name'=>'title'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Lcds\Forms\LcdsForm',
	'permissions'=>[
		'lcds' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
