<?php

return [
	'name' => 'Specialisations',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 5,
		'icon' => 'fa fa-file',
	],
	'th' => ['name','status'],
	'columns'=>[
            ['data'=>'name','name'=>'name'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Specialisations\Forms\SpecialisationsForm',
	'permissions'=>[
		'specialisations' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
