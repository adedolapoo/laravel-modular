<?php

return [
	'name' => 'Countries',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['country'],
	'columns'=>[
            ['data'=>'country','name'=>'title'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Countries\Forms\CountriesForm',
	'permissions'=>[
		'countries' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
