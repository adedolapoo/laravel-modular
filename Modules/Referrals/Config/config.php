<?php

return [
	'name' => 'Referrals',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
    'hide_add_btn' => true,
	'th' => ['first name','last_name','email','phone','referrer'],
	'columns'=>[
            ['data'=>'first_name','name'=>'first_name'],
            ['data'=>'last_name','name'=>'last_name'],
            ['data'=>'email','name'=>'email'],
            ['data'=>'phone','name'=>'phone'],
            ['data'=>'referral_user_id','name'=>'referral_user_id']
     ],
	'form'=>'Referrals\Forms\ReferralsForm',
	'permissions'=>[
		'referrals' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
