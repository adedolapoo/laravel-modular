<?php namespace Modules\Menus\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class MenuLinksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_links')->truncate();

        $menu_links = [
            [
                'id' => 1,
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 2,
                'uri' => '',
                'url' => '',
                'title' => 'About',
                'status' => 1,
                'menu_id' => 1,
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => 2,
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 3,
                'url' => '',
                'uri' => '/',
                'title' => 'Contact',
                'status' => 1,
                'menu_id' => 1,
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => 3,
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 0,
                'url' => '',
                'uri' => 'blog',
                'title' => 'Blog',
                'status' => 1,
                'menu_id' => 1,
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => 4,
                'slug' => 'enterprise',
                'parent_id' => 0,
                'page_id' => 6,
                'url' => '',
                'uri' => '',
                'title' => 'Enterprise',
                'status' => 1,
                'menu_id' => 1,
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => 5,
                'slug' => 'career',
                'parent_id' => 0,
                'page_id' => 7,
                'url' => '',
                'uri' => '',
                'title' => 'Career',
                'status' => 1,
                'menu_id' => 1,
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
        ];
        DB::table('menu_links')->insert( $menu_links );
    }

}
