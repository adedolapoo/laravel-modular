<?php

namespace Modules\Lovs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Lovs\Repositories\LovInterface;

class GradesTableSeeder extends Seeder
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
                'name' => 'First Class',
                'type' => 'grades'
            ],
        [
                'name' => 'Distinction',
                'type' => 'grades'
            ],
        [
                'name' => 'Second Class Upper',
                'type' => 'grades'
            ],
        [
                'name' => 'Upper Credit',
                'type' => 'grades'
            ],
        [
                'name' => 'Second Class Lower',
                'type' => 'grades'
            ],
        [
                'name' => 'Lower Credit',
                'type' => 'grades'
            ],
        [
                'name' => 'Pass',
                'type' => 'grades'
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
