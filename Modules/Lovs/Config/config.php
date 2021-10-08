<?php

return [
	'name' => 'Lovs',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 0,
		'icon' => 'fa fa-file',
	],
	'th' => ['name','type'],
	'columns'=>[
            ['data'=>'name','name'=>'name'],
            ['data'=>'type','name'=>'type'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Lovs\Forms\LovsForm',
	'permissions'=>[
		'lovs' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
