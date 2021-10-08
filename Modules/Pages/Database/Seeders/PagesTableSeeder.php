<?php namespace Modules\Pages\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
use Modules\Pages\Repositories\PageInterface;

class PagesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        $pages = [
            [
                'id' => 1,
                'parent_id' => 0,
                'is_home' => '1',
                'template' => 'home',
                'slug' => '/',
                'uri' => '/',
                'title' => 'Home',
                'module' => '',
                'created_at' => '2020-07-28 21:57:44',
                'updated_at' => '2020-07-28 21:57:44',
            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'is_home' => '0',
                'template' => 'about',
                'slug' => 'about-us',
                'uri' => 'about-us',
                'title' => 'About Us',
                'module' => '',
                'created_at' => '2020-07-28 21:57:44',
                'updated_at' => '2020-07-28 21:57:44',
            ],
            [
                'id' => 3,
                'is_home' => '0',
                'parent_id' => 0,
                'template' => 'contact',
                'slug' => 'contact-us',
                'uri' => 'contact-us',
                'title' => 'Contact Us',
                'module' => '',
                'created_at' => '2020-07-28 21:57:44',
                'updated_at' => '2020-07-28 21:57:44',
            ],
            [
                'id' => 4,
                'is_home' => '0',
                'parent_id' => 0,
                'template' => 'default',
                'slug' => 'terms',
                'uri' => 'terms',
                'title' => 'Terms & Condition',
                'module' => '',
                'created_at' => '2020-07-28 21:57:44',
                'updated_at' => '2020-07-28 21:57:44',
            ],
            [
                'id' => 5,
                'is_home' => '0',
                'parent_id' => 0,
                'template' => 'default',
                'slug' => 'privacy-policy',
                'uri' => 'privacy-policy',
                'title' => 'Privacy Policy',
                'module' => '',
                'created_at' => '2020-07-28 21:57:44',
                'updated_at' => '2020-07-28 21:57:44',
            ],
            [
                'id' => 6,
                'is_home' => '0',
                'parent_id' => 0,
                'template' => 'default',
                'slug' => 'enterprise',
                'uri' => 'enterprise',
                'title' => 'Enterprise',
                'module' => '',
                'created_at' => '2020-07-28 21:57:44',
                'updated_at' => '2020-07-28 21:57:44',
            ],
            [
                'id' => 7,
                'is_home' => '0',
                'parent_id' => 0,
                'template' => 'default',
                'slug' => 'career',
                'uri' => 'career',
                'title' => 'Career',
                'module' => '',
                'created_at' => '2020-07-28 21:57:44',
                'updated_at' => '2020-07-28 21:57:44',
            ]
        ];
        foreach($pages as $page){
            $page_repo = app(PageInterface::class);
            $model = $page_repo->getFirstBy('slug',$page['slug']);
            if(empty($model)){
                $page_repo->create($page);
            }
        }
    }

}
