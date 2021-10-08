<?php

namespace Modules\Lovs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Lovs\Repositories\LovInterface;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $items = [
            [
                'name' => 'OND',
                'type' => 'degrees'
            ],
        [
                'name' => 'BSC',
                'type' => 'degrees'
            ],
        [
                'name' => 'HND',
                'type' => 'degrees'
            ],
        [
                'name' => 'MSC',
                'type' => 'degrees'
            ],
        [
                'name' => 'PHD',
                'type' => 'degrees'
            ],
        ];

        foreach($items as $item){
            $lov_repo = app(LovInterface::class);
            $model = $lov_repo->getFirstBy('name',$item['name']);
            if(empty($model)){
                $lov_repo->create($item);
            }
        }
    }
}
