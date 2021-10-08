<?php namespace Modules\Posts\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostCategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->truncate();

        $post_categories = [
            [
                'category_id' => '1',
                'category'=>'Uncategorized',
                'description'=>'',
                'category_slug'=>'uncategorized'
            ]

        ];
        DB::table('post_categories')->insert( $post_categories );
    }

}
